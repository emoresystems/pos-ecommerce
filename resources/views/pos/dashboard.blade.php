@extends('pos.layout.app')

@section('content')


<!-- Main Content -->
<div class="flex-1 overflow-auto">
    <div class="flex flex-col h-full">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="flex justify-between items-center px-6 py-3">
                <div>
                    <h2 class="text-xl font-semibold">Point of Sale</h2>
                    <p class="text-sm text-gray-500">Tuesday, October 17, 2023</p>
                </div>
                <div class="flex items-center">
                    <div class="relative mr-4">
                        <input type="text" placeholder="Search products..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="bg-primary text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus-circle mr-2"></i> New Sale
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Products Section -->
            <div class="w-3/5 bg-white overflow-y-auto p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold">Products</h3>
                    <div class="flex space-x-2">
                        <select class="border rounded-lg px-3 py-2">
                            <option>All Categories</option>
                            <option>Women's Perfume</option>
                            <option>Men's Cologne</option>
                            <option>Unisex</option>
                            <option>Luxury Collection</option>
                        </select>
                        <select class="border rounded-lg px-3 py-2">
                            <option>All Brands</option>
                            <option>Chanel</option>
                            <option>Dior</option>
                            <option>Gucci</option>
                            <option>Tom Ford</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-purple-400 to-primary flex items-center justify-center">
                            <i class="fas fa-wind text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Chanel No. 5</h4>
                            <p class="text-sm text-gray-500">Eau de Parfum</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 125.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-yellow-400 to-secondary flex items-center justify-center">
                            <i class="fas fa-gem text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Dior Sauvage</h4>
                            <p class="text-sm text-gray-500">Eau de Toilette</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 98.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-pink-400 to-accent flex items-center justify-center">
                            <i class="fas fa-feather text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Gucci Bloom</h4>
                            <p class="text-sm text-gray-500">Eau de Parfum</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 112.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-blue-400 to-primary flex items-center justify-center">
                            <i class="fas fa-moon text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Tom Ford Noir</h4>
                            <p class="text-sm text-gray-500">Eau de Parfum</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 135.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-green-400 to-primary flex items-center justify-center">
                            <i class="fas fa-leaf text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Jo Malone Wood Sage</h4>
                            <p class="text-sm text-gray-500">Cologne</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 140.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card -->
                    <div class="bg-light rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-red-400 to-accent flex items-center justify-center">
                            <i class="fas fa-fire text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold">Yves Saint Laurent Black Opium</h4>
                            <p class="text-sm text-gray-500">Eau de Parfum</p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="font-bold text-primary">ksh 118.00</span>
                                <button class="bg-primary text-white px-3 py-1 rounded-lg text-sm">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Section -->
            <div class="w-2/5 bg-gray-50 border-l border-gray-200 overflow-y-auto">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-6">Current Sale</h3>

                    <!-- Customer Info -->
                    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="font-medium">Customer Information</h4>
                            <button class="text-primary text-sm">
                                <i class="fas fa-edit mr-1"></i> Change
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-gray-200 rounded-full h-10 w-10 flex items-center justify-center mr-3">
                                <i class="fas fa-user text-gray-600"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Emily Johnson</p>
                                <p class="text-sm text-gray-500">Gold Member</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Items -->
                    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                        <h4 class="font-medium mb-3">Items (3)</h4>

                        <div class="space-y-4">
                            <!-- Cart Item -->
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-primary bg-opacity-10 rounded-lg h-12 w-12 flex items-center justify-center mr-3">
                                        <i class="fas fa-wind text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Chanel No. 5</p>
                                        <p class="text-sm text-gray-500">50ml</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <span class="mx-2">1</span>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                                <div class="font-semibold">ksh 125.00</div>
                            </div>

                            <!-- Cart Item -->
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-secondary bg-opacity-10 rounded-lg h-12 w-12 flex items-center justify-center mr-3">
                                        <i class="fas fa-gem text-secondary"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Dior Sauvage</p>
                                        <p class="text-sm text-gray-500">100ml</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <span class="mx-2">1</span>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                                <div class="font-semibold">ksh 98.00</div>
                            </div>

                            <!-- Cart Item -->
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-accent bg-opacity-10 rounded-lg h-12 w-12 flex items-center justify-center mr-3">
                                        <i class="fas fa-feather text-accent"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Gucci Bloom</p>
                                        <p class="text-sm text-gray-500">75ml</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <span class="mx-2">1</span>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                                <div class="font-semibold">ksh 112.00</div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 mt-4 pt-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-semibold">ksh 335.00</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Tax (8%)</span>
                                <span class="font-semibold">ksh 26.80</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Discount</span>
                                <span class="font-semibold text-green-600">-ksh 16.75</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg mt-3 pt-3 border-t border-gray-200">
                                <span>Total</span>
                                <span>ksh 345.05</span>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Options -->
                    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                        <h4 class="font-medium mb-3">Payment Method</h4>

                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <button class="py-2 px-3 border border-gray-300 rounded-lg text-center hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors">
                                <i class="fas fa-credit-card text-gray-600 mb-1"></i>
                                <p class="text-xs">Credit Card</p>
                            </button>
                            <button class="py-2 px-3 border border-gray-300 rounded-lg text-center hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors">
                                <i class="fas fa-money-bill-wave text-gray-600 mb-1"></i>
                                <p class="text-xs">Cash</p>
                            </button>
                            <button class="py-2 px-3 border border-gray-300 rounded-lg text-center hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors">
                                <i class="fas fa-mobile-alt text-gray-600 mb-1"></i>
                                <p class="text-xs">Mobile Pay</p>
                            </button>
                        </div>

                        <div class="space-y-3">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                                <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="1234 5678 9012 3456">
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                                    <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="MM/YY">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                    <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="123">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="grid grid-cols-2 gap-3">
                        <button class="bg-gray-200 text-gray-800 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                            <i class="fas fa-times mr-2"></i> Cancel
                        </button>
                        <button class="bg-primary text-white py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                            <i class="fas fa-check-circle mr-2"></i> Complete Sale
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection