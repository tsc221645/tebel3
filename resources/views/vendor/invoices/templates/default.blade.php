<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $invoice->name }}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style type="text/css" media="screen">
            html {
                font-family: sans-serif;
                line-height: 1.15;
                margin: 0;
            }

            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
                font-size: 10px;
                margin: 36pt;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }

            .header img {
                height: 80px;
            }

            .header .invoice-info {
                text-align: right;
            }

            .header .invoice-info h1 {
                font-size: 24px;
                font-weight: bold;
            }

            .header .invoice-info p {
                margin: 0;
            }

            .billed-from {
                margin-bottom: 20px;
                display: flex;
                justify-content: space-between;
            }

            .billed-from div {
                width: 48%;
            }

            .billed-from h4 {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table th, table td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #dee2e6;
            }

            table th {
                background-color: #f8f9fa;
                font-weight: bold;
            }

            .total {
                text-align: right;
                font-weight: bold;
            }

            .footer {
                margin-top: 20px;
            }

            .footer p {
                margin: 0;
            }

            .payment-method {
                margin-top: 10px;
                font-weight: bold;
            }

            .note {
                margin-top: 5px;
                font-style: italic;
            }

            .wave {
                position: relative;
                height: 60px;
                background: #f1f1f1;
                border-top: 1px solid #e1e1e1;
            }
        </style>
    </head>

    <body>
        {{-- Header --}}
        <div class="header">
            <div>
                @if($invoice->logo)
                    <img src="{{ $invoice->getLogo() }}" alt="logo">
                @endif
            </div>
            <div class="invoice-info">
                <h1>{{ __('Invoice') }}</h1>
                <p>{{ __('No.') }} {{ $invoice->getSerialNumber() }}</p>
                <p>{{ __('Date:') }} {{ $invoice->getDate() }}</p>
            </div>
        </div>

        {{-- Billed to / From --}}
        <div class="billed-from">
            <div>
                <h4>{{ __('Billed to:') }}</h4>
                <p>{{ $invoice->buyer->name }}</p>
                <p>{{ $invoice->buyer->address }}</p>
                {{-- Mostrar el campo de email si existe para el comprador --}}
                @if(isset($invoice->buyer->custom_fields['email']))
                    <p>{{ $invoice->buyer->custom_fields['email'] }}</p>
                @endif
            </div>
            <div>
                <h4>{{ __('From:') }}</h4>
                <p>{{ $invoice->seller->name }}</p>
                <p>{{ $invoice->seller->address }}</p>
                {{-- Mostrar el campo de email si existe para el vendedor --}}
                @if(isset($invoice->seller->custom_fields['email']))
                    <p>{{ $invoice->seller->custom_fields['email'] }}</p>
                @endif
            </div>
        </div>

        {{-- Table --}}
        <table>
            <thead>
                <tr>
                    <th>{{ __('Item') }}</th>
                    <th>{{ __('Quantity') }}</th>
                    <th>{{ __('Price') }}</th>
                    <th>{{ __('Amount') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoice->items as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $invoice->formatCurrency($item->price_per_unit) }}</td>
                    <td>{{ $invoice->formatCurrency($item->sub_total_price) }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="total">{{ __('Total') }}</td>
                    <td>{{ $invoice->formatCurrency($invoice->total_amount) }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Payment Method / Note --}}
        <div class="footer">
            {{-- Mostrar el método de pago si existe --}}
            @if(isset($invoice->custom_fields['payment_method']))
                <p class="payment-method">{{ __('Payment method:') }} {{ $invoice->custom_fields['payment_method'] }}</p>
            @endif

            {{-- Mostrar las notas si existen --}}
            @if($invoice->notes)
                <p class="note">{{ __('Note:') }} {!! $invoice->notes !!}</p>
            @endif
        </div>

        {{-- Wave Design --}}
        <div class="wave"></div>
    </body>
</html>
