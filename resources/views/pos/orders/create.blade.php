@extends('pos.layout.app')

@section('content')
<div class="flex-1 overflow-auto">
    <div class="flex flex-col h-full">
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold">New Order</h2>
            <p class="text-sm text-gray-500">{{ now()->format('l, F d, Y') }}</p>
        </header>

        <div class="flex flex-col md:flex-row flex-1 overflow-hidden">
            <!-- Products -->
            <div class="w-full md:w-3/5 bg-white overflow-y-auto p-6">
                <h3 class="text-lg font-semibold mb-4">Select Products</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($perfumes as $perfume)
                    <div class="bg-light rounded-lg shadow hover:shadow-md transition">
                        <div class="h-32 bg-gradient-to-r from-purple-400 to-primary flex items-center justify-center">
                            @if($perfume->profile_pic)
                            <img src="{{ asset('storage/'.$perfume->profile_pic) }}"
                                class="h-full w-full object-cover"
                                alt="{{ $perfume->name }}">
                            @else
                            <i class="fas fa-spray-can text-white text-3xl"></i>
                            @endif
                        </div>
                        <div class="p-3">
                            <h4 class="font-semibold text-sm truncate">{{ $perfume->name }}</h4>
                            <p class="text-xs text-gray-500 truncate">{{ $perfume->description }}</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary text-sm">ksh {{ number_format($perfume->retail_price, 2) }}</span>
                                <form action="{{ route('cart.add', $perfume) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-primary text-white px-2 py-1 rounded-lg text-xs">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Cart -->
            <div class="w-full md:w-2/5 bg-gray-50 border-l overflow-y-auto p-6">
                <h3 class="text-lg font-semibold mb-4">Cart</h3>
                @if(session('cart') && count(session('cart')) > 0)
                <div class="space-y-3">
                    @foreach(session('cart') as $id => $item)
                    <div class="flex justify-between items-center bg-white shadow rounded p-3">
                        <div>
                            <h4 class="font-semibold text-sm">{{ $item['name'] }}</h4>
                            <p class="text-xs text-gray-500">{{ $item['quantity'] }} × ksh {{ number_format($item['price'], 2) }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-bold">ksh {{ number_format($item['quantity'] * $item['price'], 2) }}</span>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                    <div class="flex justify-between font-bold text-lg border-t pt-3">
                        <span>Total</span>
                        <span>ksh {{ number_format(collect(session('cart'))->sum(fn($item) => $item['quantity'] * $item['price']), 2) }}</span>
                    </div>
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg mt-4">Clear Cart</button>
                    </form>

                    <form action="{{ route('orders.invoice') }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <label class="block font-semibold mb-1">Customer</label>
                            <select name="customer_id" class="w-full border rounded-lg p-2 mb-3">
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg">
                                Create Invoice
                            </button>
                        </div>
                    </form>
                </div>
                @else
                <p class="text-gray-500">No items in cart yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection