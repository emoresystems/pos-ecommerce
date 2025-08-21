@extends('website.layout.app')
@section('content')
<!-- Contact Page Content -->
<main id="contact-page">
    <!-- Contact Hero Section -->
    <section class="contact-hero py-20 text-white bg-gradient-to-r from-pink-500 to-purple-600">
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
                            <div class="bg-pink-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-pink-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Visit Us</h3>
                                <p class="text-gray-600">123 Fragrance Ave, Paris, France 75001</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-pink-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt text-pink-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Call Us</h3>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                                <p class="text-gray-600 text-sm">Mon-Fri: 9am-6pm EST</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-pink-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-pink-600"></i>
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
                            <a href="#" class="bg-pink-100 text-pink-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-pink-100 text-pink-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-pink-100 text-pink-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-pink-100 text-pink-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition-colors">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your email address" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subject *</label>
                            <select id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                                <option value="">Select a subject</option>
                                <option value="product">Product Inquiry</option>
                                <option value="order">Order Support</option>
                                <option value="shipping">Shipping Information</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message *</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your message" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-pink-600 text-white py-3 rounded-lg hover:bg-pink-700 transition-colors font-semibold">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-pink-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="font-semibold text-lg mb-2">How long does shipping take?</h3>
                        <p class="text-gray-600">Standard shipping takes 3-5 business days within the continental US. International shipping times vary by location.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="font-semibold text-lg mb-2">What is your return policy?</h3>
                        <p class="text-gray-600">We offer a 30-day return policy on all unopened and unused products. Please keep your original receipt.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-semibold text-lg mb-2">Are your products cruelty-free?</h3>
                        <p class="text-gray-600">Yes, all our products are cruelty-free and never tested on animals. We're committed to ethical practices.</p>
                    </div>
                </div>
                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="font-semibold text-lg mb-2">How should I store my perfume?</h3>
                        <p class="text-gray-600">Store in a cool, dark place away from direct sunlight and extreme temperatures to preserve the fragrance.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="font-semibold text-lg mb-2">Do you offer gift wrapping?</h3>
                        <p class="text-gray-600">Yes, we offer premium gift wrapping services for an additional fee. You can select this option at checkout.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="font-semibold text-lg mb-2">Can I create a custom fragrance?</h3>
                        <p class="text-gray-600">We offer bespoke fragrance creation services at our Paris flagship store. Contact us for more information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection