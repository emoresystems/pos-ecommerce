@extends('website.layout.app')
@section('content')
<!-- Page Content -->
<main>
    <!-- Hero Section -->
    <section class="hero-gradient">
        <div class="max-w-7xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 brand-font">Discover Your Signature Scent</h1>
                <p class="mt-4 text-gray-700 text-lg">Indulge in fragrances that define elegance and style. Crafted with the finest ingredients for the extraordinary.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="{{ url('/perfumes') }}" class="px-8 py-3 bg-pink-600 text-white rounded-full shadow-lg hover:bg-pink-700 transition duration-300 flex items-center justify-center">
                        Shop Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#" class="px-8 py-3 border border-pink-600 text-pink-600 rounded-full hover:bg-pink-50 transition duration-300 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Luxury Perfume" class="rounded-xl shadow-2xl w-full max-w-md transform rotate-2">
                    <div class="absolute -inset-4 bg-pink-200 rounded-xl -z-10 transform -rotate-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 brand-font">Explore Our Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1592945403407-9de659572da6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Women's Perfumes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center flex-col opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white text-2xl font-bold">Women's Fragrances</h3>
                        <a href="#" class="mt-4 text-pink-300 hover:text-white">Explore <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1613047504592-4f17e12549d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Men's Perfumes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center flex-col opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white text-2xl font-bold">Men's Fragrances</h3>
                        <a href="#" class="mt-4 text-pink-300 hover:text-white">Explore <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1615634376658-c80abf877da5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Unisex Perfumes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center flex-col opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-white text-2xl font-bold">Unisex Collection</h3>
                        <a href="#" class="mt-4 text-pink-300 hover:text-white">Explore <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Perfumes -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold brand-font">Featured Perfumes</h2>
                <a href="{{ url('/perfumes') }}" class="text-pink-600 hover:text-pink-800 flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Rose Elegance">
                        <span class="absolute top-4 left-4 bg-pink-600 text-white text-xs px-2 py-1 rounded">NEW</span>
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
                <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Ocean Breeze">
                        <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs px-2 py-1 rounded">BESTSELLER</span>
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
                <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1615634376658-c80abf877da5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Midnight Oud">
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
                <div class="bg-white perfume-card rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1595425972660-5d5a77e1ed7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" class="w-full h-60 object-cover" alt="Vanilla Dream">
                        <span class="absolute top-4 left-4 bg-purple-600 text-white text-xs px-2 py-1 rounded">LIMITED</span>
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
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 brand-font">What Our Customers Say</h2>
            <div class="grid gap-8 md:grid-cols-3">
                <div class="bg-gray-50 p-6 rounded-xl shadow">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic">"The Rose Elegance perfume is absolutely divine. I receive compliments everywhere I go. The scent lasts all day!"</p>
                    <div class="mt-4 flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300 overflow-hidden mr-3">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson">
                        </div>
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic">"Ocean Breeze is my go-to summer fragrance. It's fresh, not overpowering, and perfect for everyday wear."</p>
                    <div class="mt-4 flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300 overflow-hidden mr-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <p class="text-sm text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic">"The packaging was exquisite and the scent was even better than I expected. Will definitely be purchasing again!"</p>
                    <div class="mt-4 flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300 overflow-hidden mr-3">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emily Rodriguez">
                        </div>
                        <div>
                            <h4 class="font-semibold">Emily Rodriguez</h4>
                            <p class="text-sm text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-pink-50">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4 brand-font">Join Our Newsletter</h2>
            <p class="text-gray-600 mb-8">Subscribe to receive updates, access to exclusive deals, and perfume care tips.</p>
            <form class="flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="Your email address" class="px-4 py-3 rounded-lg flex-grow border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500">
                <button type="submit" class="px-6 py-3 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition duration-300">Subscribe</button>
            </form>
        </div>
    </section>
</main>

@endsection