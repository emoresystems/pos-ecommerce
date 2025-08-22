@extends('pos.layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $order->id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .invoice-container, .invoice-container * {
                visibility: visible;
            }
            .invoice-container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            .no-print {
                display: none !important;
            }
            .break-before {
                page-break-before: always;
            }
            .break-after {
                page-break-after: always;
            }
            .avoid-break {
                page-break-inside: avoid;
            }
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
        }
        .header-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        .watermark {
            position: absolute;
            opacity: 0.03;
            font-size: 8rem;
            font-weight: bold;
            transform: rotate(-45deg);
            z-index: 0;
            user-select: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg mt-8 mb-8 invoice-container">
        <!-- Invoice Header -->
        <div class="header-gradient text-white p-6 rounded-t-lg relative overflow-hidden">
            <div class="watermark">INVOICE</div>
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <h1 class="text-3xl font-bold">INVOICE</h1>
                    <p class="text-indigo-100">Thank you for your business</p>
                </div>
                <div class="text-right">
                    <h2 class="text-2xl font-semibold">#{{ $order->id }}</h2>
                    <p>{{ $order->created_at->format('d M, Y') }}</p>
                </div>
            </div>
        </div>

        <!-- Company and Client Information -->
        <div class="flex flex-wrap p-6 avoid-break">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <div class="flex items-center mb-4">
                    <i class="fas fa-store text-amber-500 text-xl mr-3"></i>
                    <h3 class="text-lg font-semibold">From</h3>
                </div>
                <p class="font-bold text-gray-800">Perfume Palace</p>
                <p class="text-gray-600">123 Fragrance Avenue</p>
                <p class="text-gray-600">Nairobi, Kenya</p>
                <p class="text-gray-600">Phone: +254 700 123 456</p>
                <p class="text-gray-600">Email: info@perfumepalace.com</p>
            </div>
            
            <div class="w-full md:w-1/2">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user text-amber-500 text-xl mr-3"></i>
                    <h3 class="text-lg font-semibold">Bill To</h3>
                </div>
                <p class="font-bold text-gray-800">{{ $order->customer->first_name }} {{ $order->customer->last_name }}</p>
                <p class="text-gray-600">Phone: {{ $order->customer->phone ?? 'N/A' }}</p>
                <p class="text-gray-600">Email: {{ $order->customer->email ?? 'N/A' }}</p>
            </div>
        </div>

        <!-- Invoice Details -->
        <div class="px-6 pb-6 avoid-break">
            <div class="bg-gray-50 p-4 rounded-lg">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <p class="text-gray-500 text-sm">Invoice Date</p>
                        <p class="font-semibold">{{ $order->created_at->format('d M, Y') }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Invoice Number</p>
                        <p class="font-semibold">#{{ $order->id }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Order Status</p>
                        <p class="font-semibold capitalize"><span class="px-2 py-1 bg-{{ $order->status == 'completed' ? 'green' : 'yellow' }}-100 text-{{ $order->status == 'completed' ? 'green' : 'yellow' }}-800 rounded-full text-xs">{{ $order->status }}</span></p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Amount Due</p>
                        <p class="font-semibold">Ksh {{ number_format($order->total_amount, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Items Table -->
        <div class="px-6 avoid-break">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="p-3 text-left font-semibold text-gray-700">Product</th>
                        <th class="p-3 text-center font-semibold text-gray-700">Qty</th>
                        <th class="p-3 text-right font-semibold text-gray-700">Unit Price</th>
                        <th class="p-3 text-right font-semibold text-gray-700">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="p-3 text-gray-700">{{ $item->perfume->name }}</td>
                        <td class="p-3 text-center text-gray-700">{{ $item->quantity }}</td>
                        <td class="p-3 text-right text-gray-700">Ksh {{ number_format($item->unit_price, 2) }}</td>
                        <td class="p-3 text-right text-gray-700">Ksh {{ number_format($item->subtotal, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Totals -->
        <div class="px-6 pt-6 avoid-break">
            <div class="flex justify-end">
                <div class="w-full md:w-1/3">
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Subtotal:</span>
                        <span class="text-gray-800">Ksh {{ number_format($order->total_amount, 2) }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Tax (0%):</span>
                        <span class="text-gray-800">Ksh 0.00</span>
                    </div>
                    <div class="flex justify-between py-2 border-t border-gray-200">
                        <span class="text-lg font-semibold">Total:</span>
                        <span class="text-lg font-semibold">Ksh {{ number_format($order->total_amount, 2) }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600">Amount Paid:</span>
                        <span class="text-gray-800">Ksh {{ number_format($order->total_amount, 2) }}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t border-gray-200">
                        <span class="font-semibold">Balance Due:</span>
                        <span class="font-semibold">Ksh 0.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notes & Payment Information -->
        <div class="p-6 border-t border-gray-200 mt-6 avoid-break">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <h3 class="font-semibold text-gray-700 mb-2">Notes</h3>
                    <p class="text-gray-600 text-sm">Thank you for your business. Payment is expected within 30 days of invoice date.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <h3 class="font-semibold text-gray-700 mb-2">Payment Methods</h3>
                    <div class="flex space-x-2">
                        <div class="bg-gray-100 p-2 rounded">
                            <i class="fab fa-cc-mastercard text-xl text-amber-500"></i>
                        </div>
                        <div class="bg-gray-100 p-2 rounded">
                            <i class="fab fa-cc-visa text-xl text-amber-900"></i>
                        </div>
                        <div class="bg-gray-100 p-2 rounded">
                            <i class="fas fa-money-bill-wave text-xl text-green-500"></i>
                        </div>
                        <div class="bg-gray-100 p-2 rounded">
                            <i class="fab fa-mpesa text-xl text-green-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 p-6 rounded-b-lg border-t border-gray-200 text-center avoid-break">
            <p class="text-gray-500 text-sm">If you have any questions about this invoice, please contact</p>
            <p class="text-gray-500 text-sm">support@perfumepalace.com or call +254 700 123 456</p>
            <p class="text-gray-400 text-xs mt-2">Perfume Palace © {{ date('Y') }}. All rights reserved.</p>
        </div>

        <!-- Action Buttons -->
        <div class="p-6 border-t border-gray-200 no-print">
            <div class="flex justify-between">
                <a href="{{ route('orders.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2.5 rounded-lg flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Orders
                </a>
                <div class="flex space-x-3">
                    <button onclick="window.print()" class="bg-amber-500 hover:bg-amber-600 text-white px-5 py-2.5 rounded-lg flex items-center">
                        <i class="fas fa-print mr-2"></i> Print Invoice
                    </button>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-5 py-2.5 rounded-lg flex items-center">
                        <i class="fas fa-download mr-2"></i> Download PDF
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
