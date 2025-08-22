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
                        <select id="sort-select" class="border border-gray-300 rounded-lg py-2 pl-3 pr-10 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                            <option value="featured">Featured</option>
                            <option value="price_low_high">Price: Low to High</option>
                            <option value="price_high_low">Price: High to Low</option>
                            <option value="newest">Newest First</option>
                            <option value="name_asc">Name: A to Z</option>
                            <option value="name_desc">Name: Z to A</option>
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
                            <div class="space-y-2" id="category-filter">
                                <div class="text-center py-4">
                                    <i class="fas fa-spinner fa-spin text-amber-500"></i>
                                    <p class="text-gray-600 text-sm mt-2">Loading categories...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-700 mb-3">Price Range</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="price-all" name="price" class="hidden price-filter" value="all" checked>
                                    <label for="price-all" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                        </span>
                                        All Prices
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-low" name="price" class="hidden price-filter" value="0-50">
                                    <label for="price-low" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        Under Ksh 50
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-medium" name="price" class="hidden price-filter" value="50-100">
                                    <label for="price-medium" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        Ksh 50 - Ksh 100
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="price-high" name="price" class="hidden price-filter" value="100-9999">
                                    <label for="price-high" class="flex items-center cursor-pointer">
                                        <span class="w-5 h-5 border rounded-full mr-2 flex items-center justify-center">
                                            <span class="w-2 h-2 rounded-full"></span>
                                        </span>
                                        Over Ksh 100
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Stock Availability Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-700 mb-3">Availability</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="in-stock" class="hidden stock-filter" value="in_stock">
                                    <label for="in-stock" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                                        <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </span>
                                        In Stock Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button id="apply-filters" class="w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors">
                            Apply Filters
                        </button>
                        <button id="reset-filters" class="w-full mt-2 border border-gray-300 text-gray-600 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                            Reset Filters
                        </button>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="w-full md:w-3/4 lg:w-4/5">
                    <div class="flex items-center justify-between mb-6">
                        <p id="product-count" class="text-gray-600">Loading products...</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-600">View:</span>
                            <button class="p-2 rounded-lg bg-gray-100 text-gray-600 grid-view-btn active">
                                <i class="fas fa-th-large"></i>
                            </button>
                            <button class="p-2 rounded-lg text-gray-400 list-view-btn">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>

                    <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="text-center py-12 col-span-full">
                            <i class="fas fa-spinner fa-spin text-amber-500 text-3xl mb-4"></i>
                            <p class="text-gray-600">Loading perfumes...</p>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div id="pagination" class="mt-12 flex justify-center hidden">
                        <!-- Pagination will be dynamically populated -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // State management
        let allPerfumes = [];
        let allCategories = [];
        let filteredPerfumes = [];
        let currentPage = 1;
        const perPage = 9;
        let currentView = 'grid'; // 'grid' or 'list'
        let currentSort = 'featured';
        let currentFilters = {
            categories: [],
            priceRange: 'all',
            inStockOnly: false
        };

        // DOM Elements
        const productGrid = document.getElementById('product-grid');
        const productCount = document.getElementById('product-count');
        const paginationContainer = document.getElementById('pagination');
        const sortSelect = document.getElementById('sort-select');
        const applyFiltersBtn = document.getElementById('apply-filters');
        const resetFiltersBtn = document.getElementById('reset-filters');

        // Initialize
        fetchCategories().then(() => {
            fetchPerfumes();
        });
        setupEventListeners();

        function setupEventListeners() {
            // Sort selection
            sortSelect.addEventListener('change', function() {
                currentSort = this.value;
                applyFiltersAndSort();
            });

            // View toggle
            document.querySelector('.grid-view-btn').addEventListener('click', function() {
                if (currentView !== 'grid') {
                    currentView = 'grid';
                    this.classList.add('active', 'bg-gray-100', 'text-gray-600');
                    this.classList.remove('text-gray-400');
                    document.querySelector('.list-view-btn').classList.remove('active', 'bg-gray-100', 'text-gray-600');
                    document.querySelector('.list-view-btn').classList.add('text-gray-400');
                    renderProducts();
                }
            });

            document.querySelector('.list-view-btn').addEventListener('click', function() {
                if (currentView !== 'list') {
                    currentView = 'list';
                    this.classList.add('active', 'bg-gray-100', 'text-gray-600');
                    this.classList.remove('text-gray-400');
                    document.querySelector('.grid-view-btn').classList.remove('active', 'bg-gray-100', 'text-gray-600');
                    document.querySelector('.grid-view-btn').classList.add('text-gray-400');
                    renderProducts();
                }
            });

            // Filter application
            applyFiltersBtn.addEventListener('click', function() {
                // Get selected categories
                const selectedCategories = [];
                document.querySelectorAll('#category-filter input:checked').forEach(checkbox => {
                    selectedCategories.push(checkbox.value);
                });
                
                // Get selected price range
                const selectedPriceRange = document.querySelector('input[name="price"]:checked').value;
                
                // Get stock filter
                const inStockOnly = document.getElementById('in-stock').checked;
                
                currentFilters = {
                    categories: selectedCategories,
                    priceRange: selectedPriceRange,
                    inStockOnly: inStockOnly
                };
                
                currentPage = 1;
                applyFiltersAndSort();
            });

            // Reset filters
            resetFiltersBtn.addEventListener('click', function() {
                // Uncheck all category checkboxes
                document.querySelectorAll('#category-filter input').forEach(checkbox => {
                    checkbox.checked = false;
                });
                
                // Reset price range to "all"
                document.getElementById('price-all').checked = true;
                
                // Reset stock filter
                document.getElementById('in-stock').checked = false;
                document.getElementById('in-stock').nextElementSibling.classList.remove('bg-amber-50', 'border-amber-200');
                document.getElementById('in-stock').nextElementSibling.querySelector('span').classList.remove('bg-amber-500', 'border-amber-500');
                
                // Update price radio visual
                document.querySelectorAll('input[name="price"] + label span').forEach(span => {
                    span.innerHTML = '<span class="w-2 h-2 rounded-full"></span>';
                });
                document.querySelector('#price-all + label span').innerHTML = '<span class="w-2 h-2 rounded-full bg-amber-500"></span>';
                
                // Reset filters state
                currentFilters = {
                    categories: [],
                    priceRange: 'all',
                    inStockOnly: false
                };
                
                currentPage = 1;
                applyFiltersAndSort();
            });
        }

        function fetchCategories() {
            return fetch('/api/categories')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(categories => {
                    allCategories = categories;
                    populateCategoryFilter();
                })
                .catch(error => {
                    console.error('Error fetching categories:', error);
                    document.getElementById('category-filter').innerHTML = `
                        <div class="text-center py-2">
                            <i class="fas fa-exclamation-triangle text-red-500"></i>
                            <p class="text-gray-600 text-sm">Failed to load categories</p>
                        </div>
                    `;
                });
        }

        function fetchPerfumes() {
            fetch('/api/perfumes')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(perfumes => {
                    allPerfumes = perfumes;
                    filteredPerfumes = [...allPerfumes];
                    applyFiltersAndSort();
                })
                .catch(error => {
                    console.error('Error fetching perfumes:', error);
                    productGrid.innerHTML = `
                        <div class="col-span-full text-center py-12">
                            <i class="fas fa-exclamation-triangle text-red-500 text-3xl mb-4"></i>
                            <p class="text-gray-600">Failed to load perfumes. Please try again later.</p>
                            <button class="mt-4 px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700" onclick="fetchPerfumes()">
                                Retry
                            </button>
                        </div>
                    `;
                });
        }

        function populateCategoryFilter() {
            const categoryFilterContainer = document.getElementById('category-filter');
            
            if (allCategories.length === 0) {
                categoryFilterContainer.innerHTML = `
                    <div class="text-center py-2">
                        <p class="text-gray-600 text-sm">No categories available</p>
                    </div>
                `;
                return;
            }
            
            // Create checkboxes for each category
            let categoryHtml = '';
            allCategories.forEach(category => {
                const perfumeCount = category.perfumes ? category.perfumes.length : 0;
                categoryHtml += `
                    <div class="flex items-center">
                        <input type="checkbox" id="category-${category.id}" value="${category.id}" class="hidden category-checkbox">
                        <label for="category-${category.id}" class="filter-label flex items-center cursor-pointer border rounded-lg px-3 py-2 w-full transition-colors">
                            <span class="w-5 h-5 border rounded mr-2 flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </span>
                            ${category.name} <span class="text-gray-400 text-sm ml-2">(${perfumeCount})</span>
                        </label>
                    </div>
                `;
            });
            
            categoryFilterContainer.innerHTML = categoryHtml;
            
            // Add event listeners to category checkboxes
            document.querySelectorAll('.category-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const label = this.nextElementSibling;
                    if (this.checked) {
                        label.classList.add('bg-amber-50', 'border-amber-200');
                        label.querySelector('span').classList.add('bg-amber-500', 'border-amber-500');
                    } else {
                        label.classList.remove('bg-amber-50', 'border-amber-200');
                        label.querySelector('span').classList.remove('bg-amber-500', 'border-amber-500');
                    }
                });
            });

            // Add event listener to stock filter
            document.querySelector('.stock-filter').addEventListener('change', function() {
                const label = this.nextElementSibling;
                if (this.checked) {
                    label.classList.add('bg-amber-50', 'border-amber-200');
                    label.querySelector('span').classList.add('bg-amber-500', 'border-amber-500');
                } else {
                    label.classList.remove('bg-amber-50', 'border-amber-200');
                    label.querySelector('span').classList.remove('bg-amber-500', 'border-amber-500');
                }
            });
        }

        function applyFiltersAndSort() {
            // Apply filters
            filteredPerfumes = allPerfumes.filter(perfume => {
                // Category filter
                if (currentFilters.categories.length > 0) {
                    if (!perfume.category || !currentFilters.categories.includes(perfume.category.id.toString())) {
                        return false;
                    }
                }
                
                // Price filter
                if (currentFilters.priceRange !== 'all') {
                    const [min, max] = currentFilters.priceRange.split('-').map(Number);
                    if (perfume.retail_price < min || perfume.retail_price > max) {
                        return false;
                    }
                }
                
                // Stock filter
                if (currentFilters.inStockOnly && perfume.stock_quantity <= 0) {
                    return false;
                }
                
                return true;
            });
            
            // Apply sorting
            switch(currentSort) {
                case 'price_low_high':
                    filteredPerfumes.sort((a, b) => a.retail_price - b.retail_price);
                    break;
                case 'price_high_low':
                    filteredPerfumes.sort((a, b) => b.retail_price - a.retail_price);
                    break;
                case 'newest':
                    filteredPerfumes.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
                    break;
                case 'name_asc':
                    filteredPerfumes.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'name_desc':
                    filteredPerfumes.sort((a, b) => b.name.localeCompare(a.name));
                    break;
                default: // 'featured' - default sorting
                    // You might want to implement a different logic for featured sorting
                    // For now, we'll sort by ID as a placeholder
                    filteredPerfumes.sort((a, b) => a.id - b.id);
            }
            
            // Update product count
            const startIndex = (currentPage - 1) * perPage + 1;
            const endIndex = Math.min(currentPage * perPage, filteredPerfumes.length);
            productCount.textContent = `Showing ${startIndex}-${endIndex} of ${filteredPerfumes.length} products`;
            
            // Render products and pagination
            renderProducts();
            renderPagination();
        }

        function renderProducts() {
            // Calculate pagination
            const startIndex = (currentPage - 1) * perPage;
            const endIndex = startIndex + perPage;
            const currentProducts = filteredPerfumes.slice(startIndex, endIndex);
            
            let productsHtml = '';
            
            if (currentProducts.length === 0) {
                productsHtml = `
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-search text-gray-400 text-3xl mb-4"></i>
                        <p class="text-gray-600">No perfumes found matching your criteria.</p>
                        <button class="mt-4 px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700" onclick="document.getElementById('reset-filters').click()">
                            Reset Filters
                        </button>
                    </div>
                `;
            } else {
                if (currentView === 'grid') {
                    // Grid view
                    currentProducts.forEach(perfume => {
                        productsHtml += createProductCard(perfume);
                    });
                } else {
                    // List view
                    productsHtml = '<div class="col-span-full space-y-6">';
                    currentProducts.forEach(perfume => {
                        productsHtml += createProductListItem(perfume);
                    });
                    productsHtml += '</div>';
                }
            }
            
            productGrid.innerHTML = productsHtml;
            
            // Add event listeners to wishlist buttons
            document.querySelectorAll('.wishlist-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    this.querySelector('i').classList.toggle('far');
                    this.querySelector('i').classList.toggle('fas');
                    this.querySelector('i').classList.toggle('text-amber-600');
                });
            });

            // Add event listeners to add to cart buttons
            document.querySelectorAll('.add-to-cart').forEach(btn => {
                btn.addEventListener('click', function() {
                    const perfumeId = this.getAttribute('data-id');
                    const perfume = allPerfumes.find(p => p.id == perfumeId);
                    
                    // Simple cart add effect
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check mr-2"></i> Added to Cart';
                    this.classList.remove('bg-amber-600');
                    this.classList.add('bg-green-600');
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.classList.remove('bg-green-600');
                        this.classList.add('bg-amber-600');
                    }, 2000);
                    
                    // Here you would typically add to cart storage or send to server
                    console.log('Added to cart:', perfume);
                });
            });
        }

        function createProductCard(perfume) {
            // Format price
            const price = typeof perfume.retail_price === 'number' 
                ? perfume.retail_price.toFixed(2) 
                : parseFloat(perfume.retail_price).toFixed(2);
            
            // Determine badge based on some condition
            let badge = '';
            if (perfume.stock_quantity < 1) {
                badge = '<span class="absolute top-4 left-4 bg-red-600 text-white text-xs px-2 py-1 rounded">OUT OF STOCK</span>';
            } else if (perfume.stock_quantity < 5) {
                badge = '<span class="absolute top-4 left-4 bg-amber-600 text-white text-xs px-2 py-1 rounded">LOW STOCK</span>';
            } else if (parseFloat(price) > 100) {
                badge = '<span class="absolute top-4 left-4 bg-purple-600 text-white text-xs px-2 py-1 rounded">PREMIUM</span>';
            }
            
            // Check if product is out of stock
            const isOutOfStock = perfume.stock_quantity < 1;
            const addToCartBtn = isOutOfStock 
                ? '<button class="mt-4 w-full px-4 py-2 bg-gray-400 text-white rounded-lg cursor-not-allowed" disabled>Out of Stock</button>'
                : `<button class="add-to-cart mt-4 w-full px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition duration-300 flex items-center justify-center" data-id="${perfume.id}">
                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                   </button>`;
            
            return `
                <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="${perfume.profile_pic || 'https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80'}" 
                             class="w-full h-60 object-cover" alt="${perfume.name}">
                        ${badge}
                        <button class="wishlist-btn absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-amber-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-semibold text-lg">${perfume.name}</h3>
                                <p class="text-gray-600 text-sm">${perfume.category ? perfume.category.name : 'Uncategorized'}</p>
                            </div>
                            <span class="text-amber-600 font-bold">Ksh ${price}</span>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-gray-500 text-sm">In stock: ${perfume.stock_quantity}</span>
                        </div>
                        ${addToCartBtn}
                    </div>
                </div>
            `;
        }

        function createProductListItem(perfume) {
            // Format price
            const price = typeof perfume.retail_price === 'number' 
                ? perfume.retail_price.toFixed(2) 
                : parseFloat(perfume.retail_price).toFixed(2);
            
            // Check if product is out of stock
            const isOutOfStock = perfume.stock_quantity < 1;
            const addToCartBtn = isOutOfStock 
                ? '<button class="mt-4 px-6 py-2 bg-gray-400 text-white rounded-lg cursor-not-allowed" disabled>Out of Stock</button>'
                : `<button class="add-to-cart mt-4 px-6 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition duration-300 flex items-center justify-center" data-id="${perfume.id}">
                    <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                   </button>`;
            
            return `
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3 relative">
                        <img src="${perfume.profile_pic || 'https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80'}" 
                             class="w-full h-48 md:h-full object-cover" alt="${perfume.name}">
                        <button class="wishlist-btn absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-amber-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-6 md:w-2/3 flex flex-col justify-between">
                        <div>
                            <h3 class="font-semibold text-xl">${perfume.name}</h3>
                            <p class="text-gray-600 mt-1">${perfume.category ? perfume.category.name : 'Uncategorized'}</p>
                            <p class="text-gray-700 mt-3 line-clamp-3">${perfume.description || 'No description available.'}</p>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-amber-600 font-bold text-xl">$${price}</span>
                            <span class="text-gray-500 text-sm">In stock: ${perfume.stock_quantity}</span>
                        </div>
                        ${addToCartBtn}
                    </div>
                </div>
            `;
        }

        function renderPagination() {
            const totalPages = Math.ceil(filteredPerfumes.length / perPage);
            
            if (totalPages <= 1) {
                paginationContainer.classList.add('hidden');
                return;
            }
            
            paginationContainer.classList.remove('hidden');
            
            let paginationHtml = '';
            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
            
            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }
            
            // Previous button
            paginationHtml += `
                <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-amber-50 ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : ''}" data-page="${currentPage - 1}">
                    <i class="fas fa-chevron-left"></i>
                </a>
            `;
            
            // First page and ellipsis if needed
            if (startPage > 1) {
                paginationHtml += `
                    <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-amber-50" data-page="1">1</a>
                `;
                if (startPage > 2) {
                    paginationHtml += `<span class="px-2 text-gray-500">...</span>`;
                }
            }
            
            // Page numbers
            for (let i = startPage; i <= endPage; i++) {
                paginationHtml += `
                    <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border ${currentPage === i ? 'border-amber-500 bg-amber-50 text-amber-600' : 'border-gray-300 text-gray-600 hover:bg-amber-50'}" data-page="${i}">${i}</a>
                `;
            }
            
            // Last page and ellipsis if needed
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationHtml += `<span class="px-2 text-gray-500">...</span>`;
                }
                paginationHtml += `
                    <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-amber-50" data-page="${totalPages}">${totalPages}</a>
                `;
            }
            
            // Next button
            paginationHtml += `
                <a href="#" class="pagination-link w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-amber-50 ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : ''}" data-page="${currentPage + 1}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            `;
            
            paginationContainer.innerHTML = paginationHtml;
            
            // Add event listeners to pagination links
            document.querySelectorAll('.pagination-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const page = parseInt(this.getAttribute('data-page'));
                    if (page && page !== currentPage && page >= 1 && page <= totalPages) {
                        currentPage = page;
                        renderProducts();
                        renderPagination();
                        window.scrollTo({ top: productGrid.offsetTop - 100, behavior: 'smooth' });
                    }
                });
            });
        }
    });
</script>
@endsection