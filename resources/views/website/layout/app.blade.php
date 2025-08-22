<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Perfumes | Luxury Fragrances</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .brand-font { font-family: 'Playfair Display', serif; }
        .hero-gradient { background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 50%, #f9a8d4 100%); }
        .perfume-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .perfume-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
        .nav-link { position: relative; }
        .nav-link:after { content:''; position:absolute; width:0; height:2px; bottom:-4px; left:0; background-color:#ec4899; transition:width 0.3s ease; }
        .nav-link:hover:after { width:100%; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Announcement Bar -->
    <div class="bg-amber-900 text-white text-center py-2 text-sm">
        Free shipping on all orders over $50 | Use code WELCOME15 for 15% off your first order
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-xl font-bold text-amber-600 brand-font flex items-center">
            <i class="fas fa-spa mr-2"></i>Luxe Perfumes
        </a>
        
        <div class="hidden md:flex space-x-8">
            <a href="{{ url('/') }}" class="nav-link hover:text-amber-600">Home</a>
            <a href="{{ url('/perfumes') }}" class="nav-link hover:text-amber-600">Perfumes</a>
            <a href="{{ url('/about') }}" class="nav-link hover:text-amber-600">About</a>
            <a href="{{ url('/contact') }}" class="nav-link hover:text-amber-600">Contact</a>
        </div>
        
        <div class="flex items-center space-x-6">
            <a href="#" class="text-gray-600 hover:text-amber-600">
                <i class="fas fa-search"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-amber-600 relative">
                <i class="fas fa-shopping-cart"></i>
                <span class="absolute -top-2 left-3 text-xs bg-amber-600 text-white rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </a>
            
            <div class="flex items-center space-x-4">
                @guest
                    <button id="loginBtn" class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700">Login</button>
                    <button id="registerBtn" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Register</button>
                @else
                    <div class="relative">
                        <button id="profileToggle" class="flex items-center space-x-2 text-gray-600 hover:text-amber-600">
                            <span class="material-icons">person</span>
                        </button>
                        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg p-2 z-50">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold brand-font mb-4 text-white">Luxe Perfumes</h3>
                <p class="mb-4">Discover your signature scent from our curated collection of luxury fragrances.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Shop</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">All Perfumes</a></li>
                    <li><a href="#" class="hover:text-white">Women's Fragrances</a></li>
                    <li><a href="#" class="hover:text-white">Men's Fragrances</a></li>
                    <li><a href="#" class="hover:text-white">Unisex Fragrances</a></li>
                    <li><a href="#" class="hover:text-white">Gift Sets</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Help</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">Contact Us</a></li>
                    <li><a href="#" class="hover:text-white">Shipping & Returns</a></li>
                    <li><a href="#" class="hover:text-white">FAQ</a></li>
                    <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white">Terms & Conditions</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Newsletter</h4>
                <p class="mb-4">Subscribe to get special offers, free giveaways, and new product alerts.</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="px-3 py-2 bg-gray-800 text-white rounded-l focus:outline-none">
                    <button type="submit" class="bg-amber-600 text-white px-4 py-2 rounded-r hover:bg-amber-700">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-8 pt-8 border-t border-gray-800 text-center">
            <p>&copy; 2023 Luxe Perfumes. All rights reserved.</p>
        </div>
    </footer>

    <!-- LOGIN MODAL -->
    <div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
            <h2 class="text-xl font-semibold mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <input type="password" name="password" placeholder="Password"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <button type="submit"
                        class="w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700">Login</button>
            </form>

            <!-- Forgot Password -->
            <div class="text-right mt-2">
                <a href="#" id="forgotPasswordBtn" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
            </div>

            <!-- Google Login -->
            <div class="mt-4 text-center">
                <a href="#"
                   class="w-full inline-block bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Login with Google
                </a>
            </div>

            <!-- Close -->
            <button id="closeLogin" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">&times;</button>
        </div>
    </div>

    <!-- REGISTER MODAL -->
    <div id="registerModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
            <h2 class="text-xl font-semibold mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Name"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <input type="email" name="email" placeholder="Email"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <input type="password" name="password" placeholder="Password"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <button type="submit"
                        class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Register</button>
            </form>
            <button id="closeRegister" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">&times;</button>
        </div>
    </div>

    <!-- FORGOT PASSWORD MODAL -->
    <div id="forgotPasswordModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
            <h2 class="text-xl font-semibold mb-4">Reset Password</h2>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input type="email" name="email" placeholder="Enter your email"
                       class="w-full border rounded-lg px-3 py-2 mb-3" required>
                <button type="submit"
                        class="w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700">Send Reset Link</button>
            </form>
            <button id="closeForgot" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">&times;</button>
        </div>
    </div>

    <script>
        // Toggles
        const profileToggle = document.getElementById('profileToggle');
        const profileDropdown = document.getElementById('profileDropdown');
        if(profileToggle){
            profileToggle.addEventListener('click', () => {
                profileDropdown.classList.toggle('hidden');
            });
        }

        // Modal buttons
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const forgotPasswordBtn = document.getElementById('forgotPasswordBtn');

        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const forgotPasswordModal = document.getElementById('forgotPasswordModal');

        const closeLogin = document.getElementById('closeLogin');
        const closeRegister = document.getElementById('closeRegister');
        const closeForgot = document.getElementById('closeForgot');

        // Open modals
        if (loginBtn) {
            loginBtn.addEventListener('click', () => loginModal.classList.remove('hidden'));
        }
        if (registerBtn) {
            registerBtn.addEventListener('click', () => registerModal.classList.remove('hidden'));
        }
        if (forgotPasswordBtn) {
            forgotPasswordBtn.addEventListener('click', () => {
                loginModal.classList.add('hidden');
                forgotPasswordModal.classList.remove('hidden');
            });
        }

        // Close modals
        if (closeLogin) {
            closeLogin.addEventListener('click', () => loginModal.classList.add('hidden'));
        }
        if (closeRegister) {
            closeRegister.addEventListener('click', () => registerModal.classList.add('hidden'));
        }
        if (closeForgot) {
            closeForgot.addEventListener('click', () => forgotPasswordModal.classList.add('hidden'));
        }

        // Close modals when clicking outside
        document.addEventListener('click', (e) => {
            if (e.target === loginModal) loginModal.classList.add('hidden');
            if (e.target === registerModal) registerModal.classList.add('hidden');
            if (e.target === forgotPasswordModal) forgotPasswordModal.classList.add('hidden');
        });
    </script>
</body>
</html>