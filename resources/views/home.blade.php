
@extends('layouts.app')
@section('content')
    <section class="relative min-h-screen flex items-center bg-black">
        <!-- Background Image -->
        <div class="absolute inset-0 overflow-hidden">
            <img
                src="images/home-banner.jpg"
                alt="Hero Background"
                class="w-full h-full object-cover transform scale-100 transition-transform duration-2000 ease-in-out animate-hero-scale"
            >
            <!-- Gradient Overlay - Updated to blue to match tech branding -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/70 via-purple-600/40 to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-6 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-20">
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-6">
                <span class="text-white font-semibold tracking-wide uppercase bg-blue-600 px-3 py-1 rounded-full text-sm">Innovative IT Solutions</span>
                <h1 class="text-4xl md:text-6xl text-white font-bold leading-tight">
                    Technology Solutions for <span class="text-blue-400">Your Business</span>
                </h1>
                <p class="text-lg text-white max-w-lg mx-auto lg:mx-0">
                    We deliver cutting-edge web, mobile, and software solutions that drive growth and digital transformation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#" class="px-10 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-semibold transition-all duration-300 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-blue-500/30">
                        Get Started
                    </a>
                    <a href="#" class="text-white px-10 py-3 border border-blue-500 hover:border-blue-600 hover:text-white bg-transparent hover:bg-blue-700 rounded-2xl font-semibold transition-all duration-300 ease-in-out transform hover:scale-105">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Right Content - Added tech illustration placeholder -->
            <div class="hidden lg:flex justify-center">
                <div class="w-80 h-80 bg-blue-500/10 rounded-full flex items-center justify-center">
                    <svg class="w-48 h-48 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>


    <!-- Trusted Companies Carousel -->
    <section class="bg-gray-900 py-16">
        <div class="container bg-gray-800 rounded-2xl mx-auto px-6 lg:px-16 text-center p-10 pt-16">
            <!-- Heading -->
            <h2 class="text-white text-3xl md:text-4xl font-bold mb-4">
                Trusted by <span class="text-blue-400">50+ Top Companies</span>
            </h2>
            <p class="text-gray-300 mb-12 max-w-2xl mx-auto">
                We are proud to partner with leading companies across industries to deliver outstanding IT solutions.
            </p>

            <!-- Carousel Wrapper - Improved with pause on hover -->
            <div class="overflow-hidden relative" x-data="{ pause: false }" @mouseenter="pause = true" @mouseleave="pause = false">
                <div class="flex space-x-16 py-5" x-data="{
                    logos: ['Company 1', 'Company 2', 'Company 3', 'Company 4', 'Company 5', 'Company 6'],
                    speed: 30,
                    direction: 'right'
                }">
                    <!-- First set -->
                    <template x-for="logo in logos" :key="logo">
                        <div class="flex-shrink-0 bg-gray-700/30 rounded-lg p-4 flex items-center justify-center" style="width: 180px; height: 80px;">
                            <span class="text-white font-medium text-lg" x-text="logo"></span>
                        </div>
                    </template>
                    <!-- Duplicate set for seamless loop -->
                    <template x-for="logo in logos" :key="'duplicate-'+logo">
                        <div class="flex-shrink-0 bg-gray-700/30 rounded-lg p-4 flex items-center justify-center" style="width: 180px; height: 80px;">
                            <span class="text-white font-medium text-lg" x-text="logo"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="bg-gray-900 py-20">
        <div class="container text-white mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6 text-center lg:text-left">
                <span class="text-blue-400 font-semibold tracking-wide uppercase">Who We Are</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    About SoftNovaIT
                </h2>
                <p class="text-gray-300 text-lg">
                    SoftNovaIT is a technology solutions provider committed to helping businesses transform through innovative web, mobile, and software development. We combine technical expertise with creative thinking to deliver measurable results for our clients.
                </p>

                <!-- Key Statistics / Achievements -->
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="text-center lg:text-left">
                        <h3 class="text-3xl font-bold text-blue-400">500+</h3>
                        <p class="text-gray-300 text-sm">Projects Completed</p>
                    </div>
                    <div class="text-center lg:text-left">
                        <h3 class="text-3xl font-bold text-blue-400">100+</h3>
                        <p class="text-gray-300 text-sm">Happy Clients</p>
                    </div>
                    <div class="text-center lg:text-left">
                        <h3 class="text-3xl font-bold text-blue-400">50+</h3>
                        <p class="text-gray-300 text-sm">Top Companies</p>
                    </div>
                    <div class="text-center lg:text-left">
                        <h3 class="text-3xl font-bold text-blue-400">10+</h3>
                        <p class="text-gray-300 text-sm">Years Experience</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="mt-8">
                    <a href="#contact" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow-md hover:bg-blue-700 transition inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right side Image / Illustration -->
            <div class="relative">
                <img src="images/about-banner.jpg" alt="About Us Image" class="rounded-2xl shadow-lg w-full h-auto object-cover">
                <div class="absolute -bottom-5 -right-5 bg-blue-600 w-24 h-24 rounded-2xl flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>





    <!-- Services/Features Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6 lg:px-16">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-green-400 font-semibold tracking-wide uppercase">Our Services</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-2 mb-4">
                    What We <span class="gradient-text">Offer</span>
                </h2>
                <p class="text-gray-400 text-lg">
                    We provide comprehensive digital solutions to help your business grow and succeed in the online world.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service 1 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">Web Development</h3>
                    <p class="text-gray-400">
                        Custom websites and web applications built with modern technologies for optimal performance and user experience.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">Mobile App Development</h3>
                    <p class="text-gray-400">
                        Native and cross-platform mobile applications for iOS and Android that deliver seamless user experiences.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">Software Development</h3>
                    <p class="text-gray-400">
                        Custom software solutions tailored to your business needs, from enterprise applications to specialized tools.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">AI & Machine Learning</h3>
                    <p class="text-gray-400">
                        Intelligent solutions powered by artificial intelligence and machine learning to automate processes and gain insights.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">Security Solutions</h3>
                    <p class="text-gray-400">
                        Comprehensive security assessments, penetration testing, and secure architecture to protect your business.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="bg-gray-800 p-8 rounded-lg service-card group text-center">
                    <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6 icon-container">
                        <svg class="w-10 h-10 text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">Data Science</h3>
                    <p class="text-gray-400">
                        Advanced data analytics, visualization, and machine learning models to turn your data into actionable insights.
                    </p>
                    <a href="#" class="inline-block mt-4 text-green-400 font-semibold hover:text-green-300 transition-colors duration-300 flex items-center justify-center">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold rounded-lg shadow-lg hover:from-green-600 hover:to-teal-600 hover:shadow-xl transition-all duration-300">
                    View All Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #111827;
            color: #e5e7eb;
        }

        .counter-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .counter-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(46, 202, 139, 0.1) 0%, rgba(30, 156, 107, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 0;
        }

        .counter-item:hover::before {
            opacity: 1;
        }

        .counter-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #2eca8b 0%, #22d3ee 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .icon-container {
            width: 70px;
            height: 70px;
            background: rgba(46, 202, 139, 0.1);
            border: 1px solid rgba(46, 202, 139, 0.2);
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-counter {
            animation: countUp 1s ease-out forwards;
        }
    </style>

    <!-- Counter/Statistics Section -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-6 lg:px-16">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-green-400 font-semibold tracking-wide uppercase">Our Achievements</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-2 mb-4">
                    Numbers That <span class="text-green-400">Speak</span>
                </h2>
                <p class="text-gray-400 text-lg">
                    Over the years, we've achieved significant milestones that demonstrate our commitment to excellence.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="counter-item bg-gray-800 p-8 rounded-lg text-center border border-gray-700">
                    <div class="icon-container rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="stat-number mb-2" id="counter-1">0</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Projects Completed</h3>
                    <p class="text-gray-400 text-sm">Successfully delivered solutions</p>
                </div>

                <!-- Stat 2 -->
                <div class="counter-item bg-gray-800 p-8 rounded-lg text-center border border-gray-700">
                    <div class="icon-container rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="stat-number mb-2" id="counter-2">0</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Happy Clients</h3>
                    <p class="text-gray-400 text-sm">Satisfied customers worldwide</p>
                </div>

                <!-- Stat 3 -->
                <div class="counter-item bg-gray-800 p-8 rounded-lg text-center border border-gray-700">
                    <div class="icon-container rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="stat-number mb-2" id="counter-3">0</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Years Experience</h3>
                    <p class="text-gray-400 text-sm">Industry expertise</p>
                </div>

                <!-- Stat 4 -->
                <div class="counter-item bg-gray-800 p-8 rounded-lg text-center border border-gray-700">
                    <div class="icon-container rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="stat-number mb-2" id="counter-4">0</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Awards Won</h3>
                    <p class="text-gray-400 text-sm">Industry recognition</p>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-16 text-center">
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Our success is driven by our commitment to quality, innovation, and customer satisfaction.
                    We measure our achievements not just by numbers, but by the positive impact we create for our clients.
                </p>
                <div class="mt-8 flex justify-center gap-4">
                    <a href="#" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition-colors duration-300">
                        Our Portfolio
                    </a>
                    <a href="#" class="px-6 py-3 border border-green-500 text-green-400 font-semibold rounded-lg hover:bg-green-500 hover:text-white transition-colors duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-header .subtitle {
            /* color: #6c757d; */
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-header h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
            /* color: #212529; */
            line-height: 1.2;
        }

        .section-header .divider {
            height: 3px;
            width: 50px;
            background: #4e6be6;
            margin: 0 auto;
        }

        .team-slider-container {
            position: relative;
            overflow: hidden;
            margin: 0 -15px;
        }

        .team-slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .team-member {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 0 15px;
            flex: 0 0 calc(33.333% - 30px);
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .member-image {
            position: relative;
            overflow: hidden;
            height: 450px;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .social-links {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            background: rgba(78, 107, 230, 0.9);
            display: flex;
            justify-content: center;
            padding: 15px;
            transition: bottom 0.3s ease;
        }

        .team-member:hover .social-links {
            bottom: 0;
        }

        .social-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .member-info {
            padding: 25px;
            text-align: center;
        }

        .member-info h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #212529;
        }

        .member-info .position {
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 15px;
            display: block;
        }

        .member-info p {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .contact-info {
            color: #4e6be6;
            font-weight: 500;
            display: block;
            margin-top: 10px;
        }

        .slider-controls {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 15px;
        }

        .slider-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #4e6be6;
            color: #4e6be6;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .slider-btn:hover {
            background: #4e6be6;
            color: #fff;
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .dot.active {
            background: #4e6be6;
        }

        @media (max-width: 992px) {
            .team-member {
                flex: 0 0 calc(50% - 30px);
            }
        }

        @media (max-width: 768px) {
            .team-member {
                flex: 0 0 calc(100% - 30px);
            }

            .section-header h2 {
                font-size: 32px;
            }

            .slider-btn {
                width: 40px;
                height: 40px;
            }
        }
    </style>


    <section class="bg-gray-900">
        <div class="container">
        <div class="section-header">
            <span class="subtitle text-white">MEET OUR TEAM</span>
            <h2 class="text-white">Meet our Friendly Team Member</h2>
            <div class="divider"></div>
        </div>

        <div class="team-slider-container">
            <div class="team-slider" id="teamSlider">
                <!-- Team Member 1 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_1.png">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Aminesh Kumar Paul</h3>
                        <span class="position">Executive Member</span>
                        <p>The Executive Director of SoftNovaIT leads the organization’s vision and strategic direction, ensuring the delivery of innovative IT solutions across software, AI, networking, and integrated services.</p>
                        <span class="contact-info">animesh@softnovait.com</span>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_2.png" alt="Emma Smith">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Anwar Hossain Hiron</h3>
                        <span class="position">Network and Server Engineer</span>
                        <p>Responsible for designing, deploying, and maintaining network infrastructure and servers, ensuring secure, reliable, and high-performance IT operations for the organization and its clients.</p>
                        <span class="contact-info">hiron@softnovait.com</span>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_3.jpg" alt="Michael Brown">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>MD TAREK AHAMED</h3>
                        <span class="position">Network and Server Engineer</span>
                        <p>Manages and maintains network systems and servers, ensuring secure, reliable, and efficient IT infrastructure to support the organization’s operations and client services.</p>
                        <span class="contact-info">mdtarek@softnovait.com</span>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_4.png" alt="Sarah Johnson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Md Azizul Islam</h3>
                        <span class="position">Database Administrator</span>
                        <p>Responsible for managing, securing, and optimizing databases, ensuring data integrity, high availability, and efficient performance to support organizational and client operations.</p>
                        <span class="contact-info">mdazizul@softnovait.com</span>
                    </div>
                </div>

                <!-- Team Member 5 A-->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_5.jpg" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Nasir Uddin</h3>
                        <span class="position">Software Engineer</span>
                        <p>Develops and maintains software applications, collaborating with cross-functional teams to define, design, and ship new features while ensuring code quality and performance.</p>
                        <span class="contact-info">nasir93cse@gmail.com</span>
                    </div>
                </div>
                <!-- Team Member 5 B-->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_9.jpg" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Rownak Ahmed Oyshi</h3>
                        <span class="position">QA Engineer</span>
                        <p>Specializes in manual and automated testing, using tools like Selenium, JIRA, and Postman to ensure software quality, performance, and reliability across applications and platforms.</p>
                        <span class="contact-info">oyshi.ahmed@softnovait.com</span>
                    </div>
                </div>


                <!-- Team Member 6 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_6.png" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Ashraful Islam Emad</h3>
                        <span class="position">Senior Web Developer</span>
                        <p>Designs, develops, and maintains robust web applications using modern technologies like Laravel, React, and JavaScript, ensuring high performance, scalability, and user-friendly interfaces.</p>
                        <span class="contact-info">ashraful.emad@softnovait.com</span>
                    </div>
                </div>
                <!-- Team Member 7 A-->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_7.png" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Syed Mominul Islam</h3>
                        <span class="position">Web Developer</span>
                        <p>Builds and maintains dynamic, responsive websites and web applications using technologies like HTML, CSS, JavaScript, and PHP, ensuring seamless user experiences and reliable performance.</p>
                        <span class="contact-info">syed.mominul@softnovait.com</span>
                    </div>
                </div>
                
                <!-- Team Member 7 B-->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_11.jpg" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Fariha Nusrat Mumu</h3>
                        <span class="position">Testing Engineer</span>
                        <p>Performs manual and automated testing to ensure software quality and reliability. Skilled in test planning, bug tracking, and using tools like Selenium, JIRA, and Postman for efficient QA processes.</p>
                        <span class="contact-info">mumu@softnovait.com</span>
                    </div>
                </div>
               
                
                
                
                
                <!-- Team Member 8 -->
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_10.jpg" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Saimum Hossain Sagor</h3>
                        <span class="position">Technical Support</span>
                        <p>Provides technical assistance and support to clients, troubleshooting issues and ensuring optimal performance of the company’s products and services.</p>
                        <span class="contact-info">saimum.hossain@softnovait.com</span>
                    </div>
                </div>
                {{-- Team Member 10 --}}
                <div class="team-member">
                    <div class="member-image">
                        <img src="images/team_members/team_member_8.png" alt="David Wilson">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Joy Krishna Mondal</h3>
                        <span class="position">Marketing Executive</span>
                        <p>Develops and implements marketing strategies to promote the company’s services, conducting market research and analysis to identify trends and opportunities for growth.</p>
                        <span class="contact-info">joy.mondal@softnovait.com</span>
                    </div>
                </div>


            </div>
        </div>

        <div class="slider-controls">
            <button class="slider-btn" id="prevBtn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-btn" id="nextBtn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="slider-dots" id="sliderDots">
            <!-- Dots will be generated by JavaScript -->
        </div>
        </div>
    </section>



    <style>
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
    </style>

<section class="bg-gray-900 text-white font-inter min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-netcraft-primary text-white uppercase tracking-wider font-semibold">Have questions?</span>
            <h2 class="text-4xl md:text-5xl font-bold text-netcraft-dark mt-4 mb-6">We are always here to help you!</h2>
            <div class="w-16 h-1 bg-netcraft-primary mx-auto"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Left Content -->
            <div class="lg:w-2/5">
                <p class="text-netcraft-secondary text-lg mb-8">
                    We understand you might have questions about our services. Below you'll find answers to the most common questions we receive from our clients.
                </p>

                <!-- Contact Methods -->
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-phone text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-netcraft-dark font-semibold text-lg">Call Us</h4>
                            <p class="text-netcraft-secondary">+1 (234) 567-8900</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-envelope text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-netcraft-dark font-semibold text-lg">Email Us</h4>
                            <p class="text-netcraft-secondary">support@netcraft.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-comments text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-netcraft-dark font-semibold text-lg">Live Chat</h4>
                            <p class="text-netcraft-secondary">Available 24/7</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <button class="mt-10 bg-netcraft-primary hover:bg-netcraft-accent text-white font-semibold py-3 px-8 rounded-lg transition duration-300 flex items-center">
                    Contact Our Team
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>

            <!-- FAQ Section -->
            <div class="lg:w-3/5">
                <div class="bg-gray-900 rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Frequently Asked Questions</h3>

                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item border border-gray-200 rounded-lg overflow-hidden active">
                            <div class="faq-question bg-gray-900 p-5 cursor-pointer flex justify-between items-center">
                                <h4 class="font-semibold text-netcraft-dark">How long does it take to complete a project?</h4>
                                <i class="fas fa-chevron-down text-netcraft-primary transition-transform duration-300"></i>
                            </div>
                            <div class="faq-answer">
                                <div class="p-5 pt-0 text-netcraft-secondary">
                                    <p>The timeline varies depending on the project scope and complexity. Typically, most projects are completed within 4-8 weeks. We'll provide you with a detailed timeline after our initial consultation.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                            <div class="faq-question bg-gray-900 p-5 cursor-pointer flex justify-between items-center">
                                <h4 class="font-semibold text-netcraft-dark">What is your pricing structure?</h4>
                                <i class="fas fa-chevron-down text-netcraft-primary transition-transform duration-300"></i>
                            </div>
                            <div class="faq-answer">
                                <div class="p-5 pt-0 text-netcraft-secondary">
                                    <p>We offer both project-based pricing and retainer models. After understanding your requirements, we'll provide a transparent quote with no hidden fees. We also offer flexible payment plans.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                            <div class="faq-question bg-gray-900 p-5 cursor-pointer flex justify-between items-center">
                                <h4 class="font-semibold text-netcraft-dark">Do you offer ongoing support?</h4>
                                <i class="fas fa-chevron-down text-netcraft-primary transition-transform duration-300"></i>
                            </div>
                            <div class="faq-answer">
                                <div class="p-5 pt-0 text-netcraft-secondary">
                                    <p>Yes, we offer various support packages to ensure your website or application continues to perform optimally. Our support plans include regular updates, security monitoring, and technical assistance.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                            <div class="faq-question bg-gray-900 p-5 cursor-pointer flex justify-between items-center">
                                <h4 class="font-semibold text-netcraft-dark">Can you work with our existing design?</h4>
                                <i class="fas fa-chevron-down text-netcraft-primary transition-transform duration-300"></i>
                            </div>
                            <div class="faq-answer">
                                <div class="p-5 pt-0 text-netcraft-secondary">
                                    <p>Absolutely! We can work with your existing design and branding, or create a completely new look based on your preferences. We're flexible and can adapt to your specific needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Help -->
                <div class="mt-8 text-center">
                    <p class="text-netcraft-secondary">Still can't find the answer you're looking for? <a href="#" class="text-netcraft-primary font-semibold hover:underline">View all FAQs</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



    <style>
        .contact-form input,
        .contact-form textarea {
            transition: all 0.3s ease;
        }
        .contact-form input:focus,
        .contact-form textarea:focus {
            box-shadow: 0 0 0 3px rgba(78, 107, 230, 0.2);
        }
        .map-container {
            filter: grayscale(0.2) contrast(1.1);
            border-radius: 12px;
            overflow: hidden;
        }
    </style>
<section class="bg-gray-900 font-inter min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="text-white uppercase tracking-wider font-semibold">CONTACT US</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Get in Touch</h2>
            <div class="w-16 h-1 bg-netcraft-primary mx-auto"></div>
            <p class="text-white text-lg max-w-2xl mx-auto mt-6">
                Have a project in mind or want to learn more about our services? Reach out to us and our team will get back to you shortly.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h3 class="text-2xl font-bold text-white mb-8">Contact Information</h3>

                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-5">
                            <i class="fas fa-map-marker-alt text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Our Location</h4>
                            <p class="text-white">123 Digital Avenue, San Francisco, CA 94107</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-5">
                            <i class="fas fa-phone text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Phone Number</h4>
                            <p class="text-white">+1 (555) 123-4567</p>
                            <p class="text-white ">+1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-netcraft-primary w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 mr-5">
                            <i class="fas fa-envelope text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Email Address</h4>
                            <p class="text-white">info@netcraft.com</p>
                            <p class="text-white">support@netcraft.com</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-12">
                    <h4 class="text-netcraft-dark font-semibold text-lg mb-5">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-netcraft-primary hover:bg-netcraft-primary hover:text-white transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-netcraft-primary hover:bg-netcraft-primary hover:text-white transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-netcraft-primary hover:bg-netcraft-primary hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-netcraft-primary hover:bg-netcraft-primary hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Map -->
                <div class="mt-12 map-container">
                    <div class="bg-gray-300 h-64 rounded-xl flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt text-netcraft-primary text-4xl mb-3"></i>
                            <p class="text-netcraft-secondary">Interactive Map Location</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-green-600 rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Send us a Message</h3>

                    <form class="contact-form space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-white font-medium mb-2">Your Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-netcraft-primary" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-white font-medium mb-2">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-netcraft-primary" placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-white font-medium mb-2">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-netcraft-primary" placeholder="+1 (555) 000-0000">
                            </div>
                            <div>
                                <label for="subject" class="block text-white font-medium mb-2">Subject</label>
                                <input type="text" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-netcraft-primary" placeholder="Project Inquiry">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-white font-medium mb-2">Your Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-netcraft-primary" placeholder="Tell us about your project..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-netcraft-primary hover:bg-netcraft-accent text-white font-semibold py-3 px-8 rounded-lg transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Additional Info -->
                <div class="mt-8 bg-netcraft-primary rounded-xl p-6 text-white">
                    <div class="flex items-start">
                        <div class="mr-4 text-2xl">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Business Hours</h4>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p>Saturday: 10:00 AM - 4:00 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const contactForm = document.querySelector('.contact-form');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simple validation
                const nameInput = document.getElementById('name');
                const emailInput = document.getElementById('email');
                const messageInput = document.getElementById('message');

                let isValid = true;

                if (!nameInput.value.trim()) {
                    isValid = false;
                    nameInput.classList.add('border-red-500');
                } else {
                    nameInput.classList.remove('border-red-500');
                }

                if (!emailInput.value.trim() || !emailInput.value.includes('@')) {
                    isValid = false;
                    emailInput.classList.add('border-red-500');
                } else {
                    emailInput.classList.remove('border-red-500');
                }

                if (!messageInput.value.trim()) {
                    isValid = false;
                    messageInput.classList.add('border-red-500');
                } else {
                    messageInput.classList.remove('border-red-500');
                }

                if (isValid) {
                    // In a real application, you would submit the form here
                    alert('Thank you for your message! We will get back to you soon.');
                    contactForm.reset();
                }
            });
        });
    </script>








    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ accordion functionality
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');

                question.addEventListener('click', () => {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
        });
    </script>







    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('teamSlider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsContainer = document.getElementById('sliderDots');

            const members = document.querySelectorAll('.team-member');
            const memberWidth = members[0].offsetWidth + 30; // width + margin
            let currentPosition = 0;
            let visibleMembers = 3;

            // Calculate how many members are visible based on screen width
            function updateVisibleMembers() {
                if (window.innerWidth < 768) {
                    visibleMembers = 1;
                } else if (window.innerWidth < 992) {
                    visibleMembers = 2;
                } else {
                    visibleMembers = 3;
                }

                // Update dots
                updateDots();
            }

            // Create dots based on number of slides
            function createDots() {
                dotsContainer.innerHTML = '';
                const dotCount = Math.ceil(members.length / visibleMembers);

                for (let i = 0; i < dotCount; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('dot');
                    if (i === 0) dot.classList.add('active');
                    dot.addEventListener('click', () => {
                        goToSlide(i);
                    });
                    dotsContainer.appendChild(dot);
                }
            }

            // Update active dot
            function updateDots() {
                const dots = document.querySelectorAll('.dot');
                const activeIndex = Math.abs(currentPosition) / (memberWidth * visibleMembers);

                dots.forEach((dot, index) => {
                    if (index === activeIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            // Go to specific slide
            function goToSlide(index) {
                const maxPosition = 0;
                const minPosition = -((members.length - visibleMembers) * memberWidth);

                currentPosition = -index * (memberWidth * visibleMembers);

                // Ensure we don't go beyond the limits
                if (currentPosition > maxPosition) currentPosition = maxPosition;
                if (currentPosition < minPosition) currentPosition = minPosition;

                slider.style.transform = `translateX(${currentPosition}px)`;
                updateDots();
            }

            // Next slide
            nextBtn.addEventListener('click', () => {
                const minPosition = -((members.length - visibleMembers) * memberWidth);

                if (currentPosition <= minPosition) {
                    // If at the end, loop back to start
                    currentPosition = 0;
                } else {
                    currentPosition -= memberWidth * visibleMembers;
                }

                slider.style.transform = `translateX(${currentPosition}px)`;
                updateDots();
            });

            // Previous slide
            prevBtn.addEventListener('click', () => {
                const maxPosition = 0;

                if (currentPosition >= maxPosition) {
                    // If at the start, loop to end
                    currentPosition = -((members.length - visibleMembers) * memberWidth);
                } else {
                    currentPosition += memberWidth * visibleMembers;
                }

                slider.style.transform = `translateX(${currentPosition}px)`;
                updateDots();
            });

            // Initialize
            updateVisibleMembers();
            createDots();

            // Update on window resize
            window.addEventListener('resize', () => {
                updateVisibleMembers();
                createDots();
            });

            // Auto slide every 5 seconds
            setInterval(() => {
                nextBtn.click();
            }, 5000);
        });
    </script>







<script>
$(document).ready(function() {
    // Testimonial slider functionality
    const $slider = $('#testimonial-slider');
    const $slides = $slider.find('.testimonial-slide');
    const $dotsContainer = $('#testimonial-dots');
    let currentSlide = 0;
    let autoSlideInterval;

    // Create dots for each slide
    $slides.each(function(index) {
        $dotsContainer.append(`<button class="w-3 h-3 rounded-full bg-gray-300 dot ${index === 0 ? 'bg-blue-600' : ''}" data-slide="${index}"></button>`);
    });

    const $dots = $dotsContainer.find('.dot');

    // Function to show a specific slide
    function showSlide(index) {
        // Hide all slides and remove active class
        $slides.removeClass('active');
        $dots.removeClass('bg-blue-600');

        // Show the selected slide and update dot
        $slides.eq(index).addClass('active');
        $dots.eq(index).addClass('bg-blue-600');

        currentSlide = index;
    }

    // Next slide function
    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= $slides.length) next = 0;
        showSlide(next);
    }

    // Previous slide function
    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 0) prev = $slides.length - 1;
        showSlide(prev);
    }

    // Auto slide every 5 seconds
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Event handlers
    $('#next-testimonial').on('click', function() {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    $('#prev-testimonial').on('click', function() {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    // Dot click event
    $dots.on('click', function() {
        stopAutoSlide();
        const slideIndex = $(this).data('slide');
        showSlide(slideIndex);
        startAutoSlide();
    });

    // Initialize the slider
    showSlide(0);
    startAutoSlide();

    // Pause auto-slide on hover
    $slider.hover(
        function() { stopAutoSlide(); },
        function() { startAutoSlide(); }
    );
});
</script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Counter animation function
            function animateCounter(elementId, finalValue, duration) {
                const element = document.getElementById(elementId);
                const startValue = 0;
                const increment = Math.ceil(finalValue / (duration / 16)); // 60fps
                let currentValue = startValue;

                const timer = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= finalValue) {
                        currentValue = finalValue;
                        clearInterval(timer);
                    }
                    element.textContent = currentValue.toLocaleString();
                }, 16);
            }

            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Animate counters when they come into view
            let animated = false;

            function checkCounters() {
                const counterSection = document.getElementById('counter-1');
                if (isInViewport(counterSection) && !animated) {
                    animateCounter('counter-1', 500, 2000);
                    animateCounter('counter-2', 250, 2000);
                    animateCounter('counter-3', 12, 2000);
                    animateCounter('counter-4', 28, 2000);
                    animated = true;
                }
            }

            // Check on load and scroll
            window.addEventListener('load', checkCounters);
            window.addEventListener('scroll', checkCounters);

            // Initial check
            checkCounters();
        });
    </script>














@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Alpine.js components if needed
    });

    // Simple counter animation for statistics
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    function animateCounters() {
        counters.forEach(counter => {
            const target = +counter.innerText;
            const count = +counter.innerText;
            const increment = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(animateCounters, 1);
            } else {
                counter.innerText = target;
            }
        });
    }

    // Run counters when section is in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const aboutSection = document.querySelector('#about-section');
    if (aboutSection) {
        observer.observe(aboutSection);
    }
</script>
@endpush
