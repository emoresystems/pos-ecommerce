<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Perfumes | Luxury Fragrances</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .brand-font {
            font-family: 'Playfair Display', serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 50%, #f9a8d4 100%);
        }

        .perfume-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .perfume-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #ec4899;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Announcement Bar -->
    <div class="bg-pink-900 text-white text-center py-2 text-sm">
        Free shipping on all orders over $50 | Use code WELCOME15 for 15% off your first order
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-pink-600 brand-font flex items-center">
                <i class="fas fa-spa mr-2"></i>Luxe Perfumes
            </a>

            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="nav-link hover:text-pink-600">Home</a>
                <a href="{{ url('/perfumes') }}" class="nav-link hover:text-pink-600">Perfumes</a>
                <a href="{{ url('/about') }}" class="nav-link hover:text-pink-600">About</a>
                <a href="{{ url('/contact') }}" class="nav-link hover:text-pink-600">Contact</a>
            </div>

            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-pink-600">
                    <i class="fas fa-search"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-pink-600">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -mt-3 ml-2 text-xs bg-pink-600 text-white rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
                <a href="#" class="text-gray-600 hover:text-pink-600">
                    <i class="fas fa-user"></i>
                </a>

                <!-- Mobile menu button -->
                <button class="md:hidden text-gray-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-pink-600 brand-font flex items-center mb-4">
                        <i class="fas fa-spa mr-2"></i>Luxe Perfumes
                    </a>
                    <p class="text-sm">Indulge in luxury fragrances crafted with the finest ingredients from around the world.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Shop</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-pink-500">Women's Fragrances</a></li>
                        <li><a href="#" class="hover:text-pink-500">Men's Fragrances</a></li>
                        <li><a href="#" class="hover:text-pink-500">Unisex Collection</a></li>
                        <li><a href="#" class="hover:text-pink-500">Gift Sets</a></li>
                        <li><a href="#" class="hover:text-pink-500">Limited Editions</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Help</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-pink-500">FAQs</a></li>
                        <li><a href="#" class="hover:text-pink-500">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-pink-500">Track Order</a></li>
                        <li><a href="#" class="hover:text-pink-500">Contact Us</a></li>
                        <li><a href="#" class="hover:text-pink-500">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-2 mt-1 text-pink-500"></i>
                            <span>123 Fragrance Ave, Paris, France 75001</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-pink-500"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-pink-500"></i>
                            <span>hello@luxeperfumes.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; 2025 Luxe Perfumes. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>