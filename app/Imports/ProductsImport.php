<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ProductsImport implements ToModel, WithHeadingRow, WithCalculatedFormulas
{
    public function model(array $row)
    {
        return new Product([
           'CODIGO_PT'     => $row['codigo_pt'],
           'NOMBRE_PRODUCTO'    => $row['nombre_producto'], 
           'PRECIO'    => $row['precio'], 
           'FACTOR_CONVERSION_EXISTENCIA'    => $row['factor_conversion_existencia'], 
           'PESO_UNIDAD_MAYOR'    => $row['peso_unidad_mayor'], 
           'VOLUMEN_UNIDAD_MAYOR'    => $row['volumen_unidad_mayor'], 
           'PRECIO_UNITARIO'    => $row['precio_unitario'], 
        ]);
    }
}
