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
        <!-- Light Green Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-transparent opacity-30"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Left Content -->
        <div class="text-center lg:text-left space-y-6">
        <span class="text-white font-semibold tracking-wide uppercase">Digital Marketing Agency</span>
        <h1 class="text-4xl md:text-6xl text-white font-bold leading-tight">
            Creative Solutions for <span class="text-white">Your Business</span>
        </h1>
        <p class="text-lg text-white max-w-lg mx-auto lg:mx-0">
            We help you build powerful digital strategies that boost your online presence and maximize growth.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <a href="#" class="px-10 py-3 bg-white hover:bg-gray-900 text-gray-900 hover:text-white rounded-2xl font-semibold transition transition-transform duration-300 ease-in-out transform hover:scale-105">
            Get Started
            </a>
            <a href="#" class="text-gray-900 px-10 py-3 border border-green-500 hover:border-green-600 hover:text-white bg-white hover:bg-gray-900 rounded-2xl font-semibold transition transition-transform duration-300 ease-in-out transform hover:scale-105">
            Learn More
            </a>
        </div>
        </div>
    </div>
    </section>


<!-- Trusted Companies Carousel -->
<section class="bg-gray-900 py-16">
  <div class="container bg-gray-800 rounded-lg mx-auto px-6 lg:px-16 text-center p-10 pt-20">

    <!-- Heading -->
    <h2 class="text-white text-3xl md:text-4xl font-bold mb-4">
      Trusted by <span class="text-white">50+ Top Companies</span>
    </h2>
    <p class="text-white mb-12 max-w-2xl mx-auto">
      We are proud to partner with leading companies across industries to deliver outstanding digital solutions.
    </p>

    <!-- Carousel Wrapper -->
    <div class="overflow-hidden relative p-10">
      <div id="logo-carousel" class="text-white flex space-x-12 animate-slide p-10">
        <img src="https://via.placeholder.com/150x50?text=Company+1" alt="Company 1" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+2" alt="Company 2" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+3" alt="Company 3" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+4" alt="Company 4" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+5" alt="Company 5" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+6" alt="Company 6" class="h-12 object-contain">
        <!-- Repeat for smooth infinite scroll -->
        <img src="https://via.placeholder.com/150x50?text=Company+1" alt="Company 1" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+2" alt="Company 2" class="h-12 object-contain">
        <img src="https://via.placeholder.com/150x50?text=Company+3" alt="Company 3" class="h-12 object-contain">
      </div>
    </div>
  </div>
</section>

<!-- About Us Section -->
<section class="bg-gray-900 py-20">
  <div class="container text-white mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <!-- left Content -->
    <div class="space-y-6 text-center lg:text-left">
      <h2 class="text-3xl md:text-4xl font-bold">
        About Us</span>
      </h2>
      <p class="text-white text-lg">
        NetCraft is a digital marketing agency committed to helping businesses grow online. We combine creativity, strategy, and technology to deliver measurable results for our clients.
      </p>

      <!-- Key Statistics / Achievements -->
      <div class="grid grid-cols-2 gap-6 mt-6">
        <div class="text-center">
          <h3 class="text-3xl font-bold text-white">500+</h3>
          <p class="text-white text-sm">Projects Completed</p>
        </div>
        <div class="text-center">
          <h3 class="text-3xl font-bold text-white">100+</h3>
          <p class="text-white text-sm">Happy Clients</p>
        </div>
        <div class="text-center">
          <h3 class="text-3xl font-bold text-white">50+</h3>
          <p class="text-white text-sm">Top Companies</p>
        </div>
        <div class="text-center">
          <h3 class="text-3xl font-bold text-white">10+</h3>
          <p class="text-white text-sm">Years Experience</p>
        </div>
      </div>

      <!-- CTA Button -->
      <div class="mt-8">
        <a href="#contact" class="px-6 py-3 bg-green-500 text-white rounded-lg font-semibold shadow-md hover:bg-green-600 transition">
          Learn More
        </a>
      </div>
    </div>
    <!-- Right side Image / Illustration -->
    <div class="relative">
      <img src="images/about-banner.jpg" alt="About Us Image" class="rounded-2xl shadow-lg w-full h-auto object-cover">
    </div>



  </div>
</section>




<!-- Services Section -->
<section class="bg-white py-20">
  <div class="container mx-auto px-6 lg:px-16 text-center">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Our <span class="text-green-500">Services</span>
    </h2>
    <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
      We provide innovative digital solutions to help your business grow and succeed online.
    </p>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Service Item 1 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow hover:shadow-lg transition">
        <div class="text-green-500 mb-4">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4h18V7H3zm0 6v4h18v-4H3z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Web Development</h3>
        <p class="text-gray-600 text-sm">
          We build responsive, fast, and scalable websites tailored to your business needs.
        </p>
      </div>

      <!-- Service Item 2 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow hover:shadow-lg transition">
        <div class="text-green-500 mb-4">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">SEO Optimization</h3>
        <p class="text-gray-600 text-sm">
          Improve your website’s visibility and ranking on search engines with our SEO strategies.
        </p>
      </div>

      <!-- Service Item 3 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow hover:shadow-lg transition">
        <div class="text-green-500 mb-4">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
        <p class="text-gray-600 text-sm">
          Engage your audience and grow your business online with our marketing solutions.
        </p>
      </div>

      <!-- Service Item 4 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow hover:shadow-lg transition">
        <div class="text-green-500 mb-4">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">UI/UX Design</h3>
        <p class="text-gray-600 text-sm">
          Create beautiful, user-friendly interfaces that enhance the user experience.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- Tailwind Custom Animation -->
<style>
  @keyframes slide {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); } /* Adjust based on total width */
  }

  .animate-slide {
    animation: slide 20s linear infinite;
  }
  @keyframes hero-scale {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  .animate-hero-scale {
    animation: hero-scale 20s ease-in-out infinite;
  }
</style>
@endsection
