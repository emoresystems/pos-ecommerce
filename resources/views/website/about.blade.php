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
                        <div class="bg-amber-100 rounded-lg p-4 text-center">
                            <span class="text-3xl font-bold text-amber-600 brand-font">25+</span>
                            <p class="text-gray-600">Years of Excellence</p>
                        </div>
                        <div class="bg-amber-100 rounded-lg p-4 text-center">
                            <span class="text-3xl font-bold text-amber-600 brand-font">150+</span>
                            <p class="text-gray-600">Unique Fragrances</p>
                        </div>
                        <div class="bg-amber-100 rounded-lg p-4 text-center">
                            <span class="text-3xl font-bold text-amber-600 brand-font">50+</span>
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
    <section class="py-16 bg-amber-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center brand-font mb-12">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-star text-3xl text-amber-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Quality</h3>
                    <p class="text-gray-600">We use only the finest ingredients sourced from ethical suppliers around the world.</p>
                </div>
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-leaf text-3xl text-amber-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sustainability</h3>
                    <p class="text-gray-600">We're committed to eco-friendly practices and sustainable sourcing.</p>
                </div>
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-heart text-3xl text-amber-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Craftsmanship</h3>
                    <p class="text-gray-600">Each fragrance is carefully crafted by master perfumers with decades of experience.</p>
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
                link.classList.remove('font-semibold', 'text-amber-600');
            });
            document.querySelector('a[href*="contact"]').classList.add('font-semibold', 'text-amber-600');
        }
    });
</script>

@endsection