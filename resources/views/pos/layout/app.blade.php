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

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-dark text-white flex flex-col">
            <div class="p-5 text-center border-b border-gray-700">
                <h1 class="text-2xl font-bold"><i class="fas fa-wind mr-2 text-secondary"></i>Luxe Fragrances</h1>
                <p class="text-xs text-gray-400 mt-1">POS System v2.1</p>
            </div>

            <div class="p-4 border-b border-gray-700">
                <div class="text-center mb-4">
                    <p class="text-sm text-gray-400">Logged in as</p>
                    <p class="font-semibold">Sarah Johnson <span class="text-xs bg-primary px-2 py-1 rounded ml-2">Manager</span></p>
                </div>
                <div class="bg-gray-800 rounded-lg p-3 text-center">
                    <p class="text-xs text-gray-400">Today's Sales</p>
                    <p class="text-xl font-bold text-secondary">ksh 1,248.75</p>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto pt-5">
                <ul>
                    <li class="mb-1">
                        <a href="#" class="flex items-center p-3 text-sm font-medium rounded-md bg-primary text-white">
                            <i class="fas fa-cash-register w-5"></i>
                            <span class="ml-3">Point of Sale</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700">
                            <i class="fas fa-boxes w-5"></i>
                            <span class="ml-3">Inventory</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700">
                            <i class="fas fa-users w-5"></i>
                            <span class="ml-3">Customers</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700">
                            <i class="fas fa-chart-line w-5"></i>
                            <span class="ml-3">Reports</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="flex items-center p-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700">
                            <i class="fas fa-cog w-5"></i>
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="p-4 border-t border-gray-700">
                <button class="flex items-center justify-center w-full p-2 text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <span class="ml-3">Logout</span>
                </button>
            </div>
        </div>

        
        @yield('content')

    </div>

    <script>
        // Simple JavaScript for interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart buttons
            const addButtons = document.querySelectorAll('.bg-primary.text-white.px-3');
            addButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productCard = this.closest('.bg-light');
                    const productName = productCard.querySelector('h4').innerText;
                    alert(`ksh {productName} added to cart!`);
                });
            });

            // Payment method buttons
            const paymentMethods = document.querySelectorAll('.grid.grid-cols-3 button');
            paymentMethods.forEach(button => {
                button.addEventListener('click', function() {
                    paymentMethods.forEach(b => b.classList.remove('border-primary', 'bg-primary', 'bg-opacity-5'));
                    this.classList.add('border-primary', 'bg-primary', 'bg-opacity-5');
                });
            });
        });
    </script>
</body>

</html>