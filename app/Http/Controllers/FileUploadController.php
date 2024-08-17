<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function importCSV(Request $request)
    {
        $request->validate([
            'import_csv' => 'required|mimes:csv',
        ]);

        $file = $request->file('import_csv');
        $handle = fopen($file->path(), 'r');

        fgetcsv($handle);

        $chunksize = 25;
        while(!feof($handle))
        {
            $chunkdata = [];

            for ($i = 0; $i<$chunksize; $i++)
            {
                $data = fgetcsv($handle);
                if($data === false)
                {
                    break;
                }
                $chunkdata[] = $data;
            }

            $this->getchunkdata($chunkdata);
        }
        fclose($handle);

        return redirect()->route('product.create')->with('success', 'Data has been added successfully.');
    }

    public function getchunkdata($chunkdata)
    {
        foreach($chunkdata as $column){
            $codigoPt = $column[0];
            $nombreProducto = $column[1];
            $precio = $column[2];
            $factorConversionExistencia = $column[3];
            $pesoUnidadMayor = $column[4];
            $volumenUnidadMayor = $column[5];
            $precioUnitario = $column[6];

            $producto = new Product();
            $producto->CODIGO_PT = $codigoPt;
            $producto->NOMBRE_PRODUCTO = $nombreProducto;
            $producto->PRECIO = $precio;
            $producto->FACTOR_CONVERSION_EXISTENCIA = $factorConversionExistencia;
            $producto->PESO_UNIDAD_MAYOR = $pesoUnidadMayor;
            $producto->VOLUMEN_UNIDAD_MAYOR = $volumenUnidadMayor;
            $producto->PRECIO_UNITARIO = $precioUnitario;
            $producto->save();
        }
    }
    
}

