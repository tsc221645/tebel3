<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceTestController extends Controller
{
    public function generateInvoice()
    {
        // Información del cliente
        $customer = new Buyer([
            'name'          => 'Ermenejildo',
            'custom_fields' => [
                'email' => 'ermene123@gmail.com',
            ],
        ]);

        // Creación de un ítem
        $item = InvoiceItem::make('Gomy 8oz')->pricePerUnit(20);

        // Creación de la factura
        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)  // Descuento
            ->taxRate(27)  // Impuesto
            ->shipping(35)  // Envío
            ->currencySymbol('Q')  // Establecer el símbolo de quetzal
            ->currencyCode('GTQ')  // Establecer el código de la moneda
            ->currencyFormat('{SYMBOL}{VALUE}')  // Formato de moneda
            ->currencyThousandsSeparator(',')  // Separador de miles
            ->currencyDecimalPoint('.')  // Punto decimal
            ->addItem($item);  // Agregar el ítem

        // Generar y devolver la factura en el navegador
        return $invoice->stream();
    }
}
