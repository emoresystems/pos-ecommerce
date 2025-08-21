<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Fragrances | POS System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B5FBF',
                        secondary: '#D4AF37',
                        accent: '#FF9E9E',
                        dark: '#1F2937',
                        light: '#F3F4F6',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 flex h-screen">
    <!-- Mobile Navbar -->
    <div class="lg:hidden fixed top-0 left-0 right-0 bg-dark text-white flex items-center justify-between px-4 py-3 z-20">
        <a href="/pos/dashboard">
            <h1 class="text-lg font-bold">{{ config('app.name') }}</h1>
        </a>
        <button id="menu-toggle" class="text-white text-2xl focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed lg:static inset-y-0 left-0 w-64 bg-dark text-white flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-30">
        <div class="p-5 text-center border-b border-gray-700 mt-12 lg:mt-0">
            <a href="/pos/dashboard">
                <h1 class="text-lg font-bold">{{ config('app.name') }}</h1>
            </a>
            <p class="text-xs text-gray-400 mt-1">POS System v2.1</p>
        </div>

        <div class="p-4 border-b border-gray-700">
            <div class="text-center mb-4">
                <p class="text-sm text-gray-400">Logged in as</p>
                <p class="font-semibold">Sarah Johnson <span
                        class="text-xs bg-primary px-2 py-1 rounded ml-2">Manager</span></p>
            </div>
            <div class="bg-gray-800 rounded-lg p-3 text-center">
                <p class="text-xs text-gray-400">Today's Sales</p>
                <p class="text-xl font-bold text-secondary">ksh 1,248.75</p>
            </div>
        </div>

        <nav class="flex-1 overflow-y-auto pt-5">
            <ul>
                <li class="mb-1">
                    <a href="/pos/dashboard"
                        class="flex items-center p-3 text-sm font-medium rounded-md bg-primary text-white">
                        <i class="fas fa-cash-register w-5"></i>
                        <span class="ml-3">Point of Sale</span>
                    </a>
                </li>

                <!-- Orders Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('ordersDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-shopping-cart w-5"></i>
                        <span class="ml-3 flex-1 text-left">Orders</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="ordersDropdown" class="hidden pl-10">
                        <li><a href="{{ route('orders.create') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">New Order</a></li>
                        <li><a href="{{ route('orders.index') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">All Orders</a></li>
                        <li><a href="{{ route('orders.pending') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Pending Orders</a></li>
                        <li><a href="{{ route('orders.completed') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Completed Orders</a></li>
                    </ul>
                </li>

                <!-- Perfumes Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('perfumeDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-boxes w-5"></i>
                        <span class="ml-3 flex-1 text-left">Perfumes</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="perfumeDropdown" class="hidden pl-10">
                        <li><a href="{{ route('perfumes.create') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Add Perfume</a></li>
                        <li><a href="{{ route('perfumes.index') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">All Perfumes</a></li>
                    </ul>
                </li>

                <!-- Categories Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('categoryDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-layer-group w-5"></i>
                        <span class="ml-3 flex-1 text-left">Categories</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="categoryDropdown" class="hidden pl-10">
                        <li><a href="{{ route('categories.create') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Add Category</a></li>
                        <li><a href="{{ route('categories.index') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">All Categories</a></li>
                    </ul>
                </li>

                <!-- Suppliers Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('supplierDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-truck w-5"></i>
                        <span class="ml-3 flex-1 text-left">Suppliers</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="supplierDropdown" class="hidden pl-10">
                        <li><a href="{{ route('suppliers.create') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Add Supplier</a></li>
                        <li><a href="{{ route('suppliers.index') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">All Suppliers</a></li>
                    </ul>
                </li>

                <!-- Customers Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('customerDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-user w-5"></i>
                        <span class="ml-3 flex-1 text-left">Customers</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="customerDropdown" class="hidden pl-10">
                        <li><a href="{{ route('customers.create') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Add Customer</a></li>
                        <li><a href="{{ route('customers.index') }}" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">All Customers</a></li>
                    </ul>
                </li>

                <!-- Reports Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('reportDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-chart-line w-5"></i>
                        <span class="ml-3 flex-1 text-left">Reports</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="reportDropdown" class="hidden pl-10">
                        <li><a href="#" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Sales Report</a></li>
                        <li><a href="#" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Stock Report</a></li>
                    </ul>
                </li>

                <!-- Settings Dropdown -->
                <li class="mb-1">
                    <button onclick="toggleDropdown('settingsDropdown')"
                        class="w-full flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-cog w-5"></i>
                        <span class="ml-3 flex-1 text-left">Settings</span>
                        <i class="fas fa-chevron-down text-xs ml-auto"></i>
                    </button>
                    <ul id="settingsDropdown" class="hidden pl-10">
                        <li><a href="#" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">Profile</a></li>
                        <li><a href="#" class="block p-2 text-sm text-gray-300 hover:bg-gray-700 rounded-md">System Settings</a></li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div class="p-4 border-t border-gray-700">
            <button
                class="flex items-center justify-center w-full p-2 text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="ml-3">Logout</span>
            </button>
        </div>
    </div>

    <!-- Content Area -->
    <main class="flex-1 flex flex-col overflow-auto mt-14 lg:mt-0">
        @yield('content')
    </main>


    <script>
        // Sidebar Toggle for Mobile
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Dropdown Toggle
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle("hidden");
        }
    </script>

</body>

</html>