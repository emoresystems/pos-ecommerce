@extends('pos.layout.app')

@section('content')
<!-- Main Content -->
<div class="flex-1 overflow-auto">
    <div class="flex flex-col h-full">
        <!-- Header -->
        <header class="bg-white shadow relative">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center px-4 md:px-6 py-3 space-y-3 md:space-y-0">
                <div>
                    <h2 class="text-xl font-semibold">Point of Sale</h2>
                    <p class="text-sm text-gray-500">{{ now()->format('l, F d, Y') }}</p>
                </div>
                <div class="flex items-center w-full md:w-auto">
                    <div class="relative flex-1 md:flex-none mr-2">
                        <input type="text" placeholder="Search products..."
                            class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="bg-primary text-white px-4 py-2 rounded-lg flex items-center whitespace-nowrap">
                        <i class="fas fa-plus-circle mr-2"></i> New Sale
                    </button>
                </div>
            </div>

            <!-- Toggle Cart Button (only on mobile) -->
            <button id="cartToggle"
                class="md:hidden absolute left-2 right-4 bottom-[-22px] bg-primary text-white px-4 py-2 rounded-full flex items-center justify-center shadow-lg relative">
                <i class="fas fa-shopping-cart text-lg"></i>
                
                <!-- Cart count badge -->
                @php $cartCount = session('cart') ? collect(session('cart'))->sum('quantity') : 0; @endphp
                @if($cartCount > 0)
                <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full">
                    {{ $cartCount }}
                </span>
                @endif
            </button>
        </header>

        <!-- Main Content Area -->
        <div class="flex flex-col md:flex-row flex-1 overflow-hidden">
            <div class="w-full md:w-3/5 bg-white overflow-y-auto p-4 md:p-6">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 space-y-3 md:space-y-0">
                    <h3 class="text-lg font-semibold">Products</h3>
                    <div class="flex space-x-2">
                        <select class="border rounded-lg px-3 py-2 text-sm">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <select class="border rounded-lg px-3 py-2 text-sm">
                            <option value="">All Suppliers</option>
                            @foreach(\App\Models\Supplier::all() as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @forelse($perfumes as $perfume)
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-32 sm:h-40 bg-gradient-to-r from-purple-400 to-primary flex items-center justify-center">
                            @if($perfume->profile_pic)
                            <img src="{{ asset('storage/'.$perfume->profile_pic) }}"
                                alt="{{ $perfume->name }}"
                                class="h-full w-full object-cover">
                            @else
                            <i class="fas fa-spray-can text-white text-3xl sm:text-5xl"></i>
                            @endif
                        </div>
                        <div class="p-3 sm:p-4">
                            <h4 class="font-semibold text-sm sm:text-base truncate">{{ $perfume->name }}</h4>
                            <p class="text-xs sm:text-sm text-gray-500 truncate">{{ $perfume->description }}</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary text-sm sm:text-base">
                                    ksh {{ number_format($perfume->retail_price, 2) }}
                                </span>
                                <form action="{{ route('cart.add', $perfume) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-primary text-white px-2 sm:px-3 py-1 rounded-lg text-xs sm:text-sm">
                                        <i class="fas fa-cart-plus mr-1"></i> Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="col-span-2 md:col-span-3 lg:col-span-4 text-center text-gray-500">No products available</p>
                    @endforelse
                </div>
            </div>

            <!-- Cart Section -->
            <div id="cartPanel" class="w-full md:w-2/5 bg-gray-50 border-t md:border-t-0 md:border-l border-gray-200 overflow-y-auto 
                fixed md:static bottom-0 left-0 h-2/3 md:h-auto transform translate-y-full md:translate-y-0 transition-transform duration-300 ease-in-out z-50">
                <div class="p-4 md:p-6">
                    <h3 class="text-lg font-semibold mb-6">Current Sale</h3>

                    @if(session('cart') && count(session('cart')) > 0)
                    <div class="space-y-4">
                        @foreach(session('cart') as $id => $item)
                        <div class="flex justify-between items-center bg-white shadow rounded-lg p-3">
                            <div>
                                <h4 class="font-semibold text-sm">{{ $item['name'] }}</h4>
                                <p class="text-xs text-gray-500">
                                    {{ $item['quantity'] }} × ksh {{ number_format($item['price'], 2) }}
                                </p>
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
                            <span>
                                ksh {{ number_format(collect(session('cart'))->sum(fn($item) => $item['quantity'] * $item['price']), 2) }}
                            </span>
                        </div>

                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg mt-4">Clear Cart</button>
                        </form>
                    </div>
                    @else
                    <p class="text-gray-500">No items in cart yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script for toggle -->
<script>
    const cartToggle = document.getElementById('cartToggle');
    const cartPanel = document.getElementById('cartPanel');

    cartToggle?.addEventListener('click', () => {
        cartPanel.classList.toggle('translate-y-full');
    });
</script>
@endsection
