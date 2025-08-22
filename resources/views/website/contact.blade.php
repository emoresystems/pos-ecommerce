@extends('website.layout.app')
@section('content')
<!-- Contact Page Content -->
<main id="contact-page">
    <!-- Contact Hero Section -->
    <section class="contact-hero py-20 text-white bg-gradient-to-r from-amber-500 to-purple-600">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-xl max-w-3xl mx-auto">We'd love to hear from you. Reach out to us with questions, feedback, or inquiries.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
                    <p class="text-gray-600 mb-8">Have a question about our products? Need assistance with an order? Want to share your experience with our fragrances? We're here to help.</p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-amber-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Visit Us</h3>
                                <p class="text-gray-600">123 Fragrance Ave, Paris, France 75001</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-amber-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Call Us</h3>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                                <p class="text-gray-600 text-sm">Mon-Fri: 9am-6pm EST</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-amber-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Email Us</h3>
                                <p class="text-gray-600">hello@luxeperfumes.com</p>
                                <p class="text-gray-600 text-sm">We typically reply within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="font-semibold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-amber-100 text-amber-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-amber-100 text-amber-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-colors">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>

                    {{-- ✅ Toast Notifications --}}
                    @if (session('success'))
                    <div id="toast-success"
                        class="fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow border border-green-300"
                        role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                            ✅
                        </div>
                        <div class="ml-3 text-sm font-normal text-green-700">
                            {{ session('success') }}
                        </div>
                        <button type="button" onclick="this.parentElement.remove()"
                            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-600 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex h-8 w-8"
                            aria-label="Close">
                            ✖
                        </button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div id="toast-error"
                        class="fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-red-600 bg-white rounded-lg shadow border border-red-300"
                        role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 bg-red-100 rounded-lg">
                            ⚠️
                        </div>
                        <div class="ml-3 text-sm font-normal text-red-700">
                            Please fix the errors below.
                        </div>
                        <button type="button" onclick="this.parentElement.remove()"
                            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-600 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex h-8 w-8"
                            aria-label="Close">
                            ✖
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('contacts.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- ✅ Honeypot field (spam protection) --}}
                        <input type="text" name="website" style="display:none">

                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                                placeholder="Your name" required>
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                                placeholder="Your email address" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subject *</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                                placeholder="Subject" required>
                        </div>

                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                                placeholder="Your message" required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition-colors font-semibold">
                            Send Message
                        </button>
                    </form>
                </div>

                {{-- ✅ Auto-hide Toast Script --}}
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        setTimeout(() => {
                            const successToast = document.getElementById("toast-success");
                            const errorToast = document.getElementById("toast-error");
                            if (successToast) successToast.remove();
                            if (errorToast) errorToast.remove();
                        }, 4000); // auto hide after 4s
                    });
                </script>

            </div>
        </div>
    </section>


</main>
@endsection