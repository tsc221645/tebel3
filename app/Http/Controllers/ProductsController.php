<?php

use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ProductsController extends Controller 
{
    public function import() 
    {
        Excel::import(new ProductsImport, 'DatosProdin.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function store()
    {
        $product = Product::create(
            [
                'content' => request()->get('import_csv', ''),
            ]
            );

            return redirect()->route('productos');
    }
}