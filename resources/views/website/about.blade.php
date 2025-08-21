@extends('website.layout.app')
@section('content')
    <!-- About Page Content -->
    <main id="about-page">
        <!-- About Hero Section -->
        <section class="about-hero py-20 text-gray-600">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold brand-font mb-4">Our Story</h1>
                <p class="text-xl max-w-3xl mx-auto">Discover the essence of luxury and craftsmanship behind Luxe Perfumes</p>
            </div>
        </section>

        <!-- About Content -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold brand-font mb-6">Crafting Luxury Since 1995</h2>
                        <p class="text-gray-600 mb-4">Founded in the heart of Paris, Luxe Perfumes began as a small boutique perfumery with a vision to create extraordinary fragrances that capture emotions and memories.</p>
                        <p class="text-gray-600 mb-4">Our master perfumers combine traditional techniques with innovative approaches, sourcing the finest ingredients from around the world to create scents that are both timeless and contemporary.</p>
                        <p class="text-gray-600 mb-6">Each fragrance tells a story, evoking emotions and creating lasting impressions. We believe that a signature scent is an essential part of personal expression.</p>
                        <div class="flex space-x-4">
                            <div class="bg-pink-100 rounded-lg p-4 text-center">
                                <span class="text-3xl font-bold text-pink-600 brand-font">25+</span>
                                <p class="text-gray-600">Years of Excellence</p>
                            </div>
                            <div class="bg-pink-100 rounded-lg p-4 text-center">
                                <span class="text-3xl font-bold text-pink-600 brand-font">150+</span>
                                <p class="text-gray-600">Unique Fragrances</p>
                            </div>
                            <div class="bg-pink-100 rounded-lg p-4 text-center">
                                <span class="text-3xl font-bold text-pink-600 brand-font">50+</span>
                                <p class="text-gray-600">Countries Served</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1595425970377-2f8ded7c7b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Perfume Making" class="rounded-xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-16 bg-pink-50">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center brand-font mb-12">Our Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-star text-3xl text-pink-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Quality</h3>
                        <p class="text-gray-600">We use only the finest ingredients sourced from ethical suppliers around the world.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-leaf text-3xl text-pink-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sustainability</h3>
                        <p class="text-gray-600">We're committed to eco-friendly practices and sustainable sourcing.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-heart text-3xl text-pink-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Craftsmanship</h3>
                        <p class="text-gray-600">Each fragrance is carefully crafted by master perfumers with decades of experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center brand-font mb-12">Meet Our Master Perfumers</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Isabelle Laurent" class="rounded-full w-48 h-48 object-cover mx-auto mb-4 shadow-md">
                        <h3 class="text-xl font-semibold">Isabelle Laurent</h3>
                        <p class="text-pink-600 mb-2">Head Perfumer</p>
                        <p class="text-gray-600">With over 30 years of experience, Isabelle creates our most complex and beloved fragrances.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Marc Dubois" class="rounded-full w-48 h-48 object-cover mx-auto mb-4 shadow-md">
                        <h3 class="text-xl font-semibold">Marc Dubois</h3>
                        <p class="text-pink-600 mb-2">Master Blender</p>
                        <p class="text-gray-600">Marc specializes in creating unique scent combinations that surprise and delight.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Sophie Moreau" class="rounded-full w-48 h-48 object-cover mx-auto mb-4 shadow-md">
                        <h3 class="text-xl font-semibold">Sophie Moreau</h3>
                        <p class="text-pink-600 mb-2">Scent Designer</p>
                        <p class="text-gray-600">Sophie brings innovative approaches to traditional perfumery techniques.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Antoine Bernard" class="rounded-full w-48 h-48 object-cover mx-auto mb-4 shadow-md">
                        <h3 class="text-xl font-semibold">Antoine Bernard</h3>
                        <p class="text-pink-600 mb-2">Raw Materials Expert</p>
                        <p class="text-gray-600">Antoine travels the world to source the finest and most unique ingredients.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Contact Page Content -->
    <main id="contact-page" class="hidden">
        <!-- Contact Hero Section -->
        <section class="contact-hero py-20 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold brand-font mb-4">Get In Touch</h1>
                <p class="text-xl max-w-3xl mx-auto">We'd love to hear from you. Reach out to us with questions, feedback, or inquiries.</p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-3xl font-bold brand-font mb-6">Contact Us</h2>
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
                        <h3 class="text-2xl font-bold brand-font mb-6">Send Us a Message</h3>
                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your email address">
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                                <select id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                    <option value="">Select a subject</option>
                                    <option value="product">Product Inquiry</option>
                                    <option value="order">Order Support</option>
                                    <option value="shipping">Shipping Information</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-gray-700 mb-2">Message</label>
                                <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Your message"></textarea>
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
                <h2 class="text-3xl font-bold text-center brand-font mb-12">Frequently Asked Questions</h2>
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

   
    <script>
        // Simple page navigation (for demo purposes)
        document.addEventListener('DOMContentLoaded', function() {
            // This would normally be handled by your backend routing
            // For demo, we'll simulate page navigation
            const urlParams = new URLSearchParams(window.location.search);
            const page = urlParams.get('page');
            
            if (page === 'contact') {
                document.getElementById('about-page').classList.add('hidden');
                document.getElementById('contact-page').classList.remove('hidden');
                document.title = "Luxe Perfumes | Contact Us";
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('font-semibold', 'text-pink-600');
                });
                document.querySelector('a[href*="contact"]').classList.add('font-semibold', 'text-pink-600');
            }
        });
    </script>

    @endsection