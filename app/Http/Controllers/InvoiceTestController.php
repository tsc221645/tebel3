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
        $customer = new Buyer([
            'name'          => 'Ermenejildo',
            'custom_fields' => [
                'email' => 'ermene123@gmail.com',
            ],
        ]);

        $item = InvoiceItem::make('Gomy 8oz')->pricePerUnit(20);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(27)
            ->shipping(35)
            ->addItem($item);

        return $invoice->stream();
    }
}
