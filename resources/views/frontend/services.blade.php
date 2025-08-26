@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Digital Marketing Solutions for Business Growth</h1>
                <p class="text-lg text-gray-600 mb-8">We help brands grow with data-driven digital marketing strategies that deliver measurable results.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-medium text-center">Our Services</a>
                    <a href="#" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-full font-medium text-center">Contact Us</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="images/portfolio-banner.jpg" alt="Digital Marketing" class="rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Digital Marketing Services</h2>
                <p class="text-gray-600">We offer a comprehensive range of digital marketing services to help your business grow online.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-search text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Search Engine Optimization</h3>
                    <p class="text-gray-600 mb-4">Improve your website's visibility in search engines and drive more organic traffic.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Learn More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-ad text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Pay-Per-Click Advertising</h3>
                    <p class="text-gray-600 mb-4">Drive targeted traffic to your website with carefully managed PPC campaigns.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Learn More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-share-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Social Media Marketing</h3>
                    <p class="text-gray-600 mb-4">Engage with your audience and build your brand on social media platforms.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Learn More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">250+</h3>
                    <p class="text-blue-100">Projects Completed</p>
                </div>
                <div class="p-6">
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">98%</h3>
                    <p class="text-blue-100">Client Satisfaction</p>
                </div>
                <div class="p-6">
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">15+</h3>
                    <p class="text-blue-100">Years Experience</p>
                </div>
                <div class="p-6">
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">50+</h3>
                    <p class="text-blue-100">Team Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Recent Projects</h2>
                <p class="text-gray-600">Check out some of our successful digital marketing campaigns and projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="images/portfolio1.jpg" alt="Project" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">E-commerce SEO Strategy</h3>
                        <p class="text-gray-600 mb-4">Increased organic traffic by 156% for an online retailer.</p>
                        <a href="#" class="text-blue-600 font-medium">View Case Study</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="images/portfolio2.jpg" alt="Project" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Social Media Campaign</h3>
                        <p class="text-gray-600 mb-4">Generated over 2M impressions for a lifestyle brand.</p>
                        <a href="#" class="text-blue-600 font-medium">View Case Study</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="images/portfolio3.jpg" alt="Project" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Web Service</h3>
                        <p class="text-gray-600 mb-4">Developed a robust API for a fintech application.</p>
                        <a href="#" class="text-blue-600 font-medium">View Case Study</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-medium">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-gray-600">We've helped businesses of all sizes achieve their digital marketing goals.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"SoftNovaIT's SEO strategies transformed our online presence. Our organic traffic has increased by over 200% in just 6 months."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-gray-600">CEO, TechSolutions</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The social media campaign designed by SoftNovaIT generated over 5,000 qualified leads for our new product launch."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-gray-600">Marketing Director, InnovateCo</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Their data-driven approach to PPC advertising reduced our customer acquisition cost by 35% while increasing conversion rates."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Emily Rodriguez</h4>
                            <p class="text-gray-600">E-commerce Manager, FashionHub</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Grow Your Business?</h2>
            <p class="text-blue-100 max-w-2xl mx-auto mb-8">Contact us today for a free consultation and let's discuss how we can help you achieve your business goals.</p>
            <a href="#" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-full font-bold">Get Started Now</a>
        </div>
    </section>

     <!-- JavaScript for interactive elements -->
    <script>
        $(document).ready(function() {
            // Smooth scrolling for anchor links
            $('a[href*="#"]').on('click', function(e) {
                e.preventDefault();

                $('html, body').animate(
                    {
                        scrollTop: $($(this).attr('href')).offset().top - 80,
                    },
                    500,
                    'linear'
                );
            });

            // Sticky header
            $(window).scroll(function() {
                if ($(window).scrollTop() > 50) {
                    $('header').addClass('shadow-lg');
                } else {
                    $('header').removeClass('shadow-lg');
                }
            });

            // Mobile menu toggle
            $('.md:hidden').click(function() {
                $('nav').toggleClass('hidden');
            });
        });
    </script>
