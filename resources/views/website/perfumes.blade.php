@extends('website.layout.app')
@section('content')
<!-- Page Content -->
<main>
    <!-- Page Header -->
    <section class="bg-white py-8 border-b">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <div>
                    <h1 class="text-3xl font-bold brand-font">Perfume Collection</h1>
                    <p class="text-gray-600 mt-2">Discover our exquisite range of luxury fragrances</p>
                </div>
                <div class="mt-4 md:mt-0 flex items-center">
                    <span class="text-gray-600 mr-2">Sort by:</span>
                    <div class="relative">
                        <select class="border border-gray-300 rounded-lg py-2 pl-3 pr-10 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option>Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Most Popular</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row">
                <!-- Filters Sidebar -->
                <div class="w-full md:w-1/4 lg:w-1/5 pr-0 md:pr-8 mb-8 md:mb-0">
                    <div class="bg-white rounded-lg shadow p-6 sticky top-24">
                        <h3 class="font-bold text-lg mb-4 brand-font">Filters</h3>

                        <!-- Category Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-700 mb-3">Category</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="women" class="hidden filter-checkbox">
                                    <label for="women" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Women's Fragrances
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="men" class="hidden filter-checkbox">
                                    <label for="men" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Men's Fragrances
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="unisex" class="hidden filter-checkbox" checked>
                                    <label for="unisex" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors bg-pink-50 border-pink-200">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center bg-pink-500 border-pink-500">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Unisex
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-700 mb-3">Price Range</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="price-all" name="price" class="hidden" checked>
                                    <label for="price-all" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full bg-pink-500"></span>
                                        </span>
                                        All Prices
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-low" name="price" class="hidden">
                                    <label for="price-low" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        Under $50
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-medium" name="price" class="hidden">
                                    <label for="price-medium" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        $50 - $100
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-high" name="price" class="hidden">
                                    <label for="price-high" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        Over $100
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Scent Type Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-700 mb-3">Scent Type</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="floral" class="hidden filter-checkbox">
                                    <label for="floral" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Floral
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="woody" class="hidden filter-checkbox">
                                    <label for="woody" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Woody
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="fresh" class="hidden filter-checkbox" checked>
                                    <label for="fresh" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors bg-pink-50 border-pink-200">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center bg-pink-500 border-pink-500">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Fresh
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="oriental" class="hidden filter-checkbox">
                                    <label for="oriental" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        Oriental
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-pink-600 text-white py-2 rounded-lg hover:bg-pink-700 transition-colors">
                            Apply Filters
                        </button>
                        <button class="w-full mt-2 border border-gray-300 text-gray-600 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                            Reset Filters
                        </button>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="w-full md:w-3/4 lg:w-4/5">
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-gray-600">Showing 1-12 of 48 products</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-600">View:</span>
                            <button class="p-2 rounded-lg bg-gray-100 text-gray-600">
                                <i class="fas fa-th-large"></i>
                            </button>
                            <button class="p-2 rounded-lg text-gray-400">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Product Card 1 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Rose Elegance">
                                <span class="absolute top-4 left-4 bg-pink-600 text-white text-xs px-2 py-1 rounded">NEW</span>
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Rose Elegance</h3>
                                        <p class="text-gray-600 text-sm">Floral & Elegant</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$89.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(42)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Ocean Breeze">
                                <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs px-2 py-1 rounded">BESTSELLER</span>
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Ocean Breeze</h3>
                                        <p class="text-gray-600 text-sm">Fresh & Light</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$78.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(56)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1615634376658-c80abf877da5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Midnight Oud">
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Midnight Oud</h3>
                                        <p class="text-gray-600 text-sm">Deep & Intense</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$125.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(28)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1595425972660-5d5a77e1ed7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Vanilla Dream">
                                <span class="absolute top-4 left-4 bg-purple-600 text-white text-xs px-2 py-1 rounded">LIMITED</span>
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Vanilla Dream</h3>
                                        <p class="text-gray-600 text-sm">Sweet & Warm</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$95.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(37)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Product Card 5 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1592945403407-9de659572da6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Jasmine Noir">
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Jasmine Noir</h3>
                                        <p class="text-gray-600 text-sm">Mysterious & Alluring</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$110.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(64)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Product Card 6 -->
                        <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1613047504592-4f17e12549d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Sandalwood Mystique">
                                <span class="absolute top-4 left-4 bg-amber-600 text-white text-xs px-2 py-1 rounded">TRENDING</span>
                                <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-pink-600">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold text-lg">Sandalwood Mystique</h3>
                                        <p class="text-gray-600 text-sm">Earthy & Warm</p>
                                    </div>
                                    <span class="text-pink-600 font-bold">$85.00</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(31)</span>
                                </div>
                                <button class="mt-4 w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50 active">1</a>
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50">2</a>
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50">3</a>
                            <span class="px-2 text-gray-500">...</span>
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50">8</a>
                            <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-pink-50">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script>
    // Simple filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterCheckboxes = document.querySelectorAll('.filter-checkbox');

        filterCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const label = this.nextElementSibling;
                if (this.checked) {
                    label.classList.add('bg-pink-50', 'border-pink-200');
                    label.querySelector('span').classList.add('bg-pink-500', 'border-pink-500');
                } else {
                    label.classList.remove('bg-pink-50', 'border-pink-200');
                    label.querySelector('span').classList.remove('bg-pink-500', 'border-pink-500');
                }
            });
        });

        // Price radio buttons
        const priceRadios = document.querySelectorAll('input[name="price"]');
        priceRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('input[name="price"] + label span').forEach(span => {
                    span.innerHTML = '<span class="w-2 h-2 rounded-full"></span>';
                });

                const selectedSpan = this.nextElementSibling.querySelector('span');
                selectedSpan.innerHTML = '<span class="w-2 h-2 rounded-full bg-pink-500"></span>';
            });
        });
    });
</script>
@endsection