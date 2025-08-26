@extends('layouts.app')
@Section('content')

<!-- Hero Section -->
<section class="relative bg-gray-900 text-white h-screen flex items-center">
  <img src="https://via.placeholder.com/1920x1080" alt="Hero Background" class="absolute inset-0 w-full h-full object-cover opacity-40">
  <div class="container mx-auto px-6 relative z-10 text-center lg:text-left">
    <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
      Innovative IT Solutions <br>
      for Your Business Growth
    </h1>
    <p class="text-lg md:text-2xl mb-8 text-gray-200">
      Specializing in Web Development, Mobile Apps, ERP Systems, and Digital Marketing
    </p>
    <a href="#contact" class="px-8 py-4 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
      Get a Free Consultation
    </a>
  </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 lg:px-16 text-center">
    <h2 class="text-3xl font-bold mb-12">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/100" class="mx-auto mb-4" alt="Web Development">
        <h3 class="text-xl font-semibold mb-2">Web Development</h3>
        <p class="text-gray-500 text-sm">Custom websites tailored to your business needs with modern design.</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/100" class="mx-auto mb-4" alt="Mobile Apps">
        <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
        <p class="text-gray-500 text-sm">Native and cross-platform mobile solutions for Android & iOS.</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/100" class="mx-auto mb-4" alt="ERP Solutions">
        <h3 class="text-xl font-semibold mb-2">ERP Solutions</h3>
        <p class="text-gray-500 text-sm">Streamlining business processes with customized ERP systems.</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/100" class="mx-auto mb-4" alt="Digital Marketing">
        <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
        <p class="text-gray-500 text-sm">SEO, SEM, and social media strategies to boost online presence.</p>
      </div>

    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-16 text-center">
    <h2 class="text-3xl font-bold mb-12">Recent Projects</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

      <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" class="w-full h-56 object-cover" alt="Project 1">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Project Name 1</h3>
          <p class="text-gray-500 text-sm">Brief description of the project highlighting key features.</p>
        </div>
      </div>

      <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" class="w-full h-56 object-cover" alt="Project 2">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Project Name 2</h3>
          <p class="text-gray-500 text-sm">Brief description of the project highlighting key features.</p>
        </div>
      </div>

      <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" class="w-full h-56 object-cover" alt="Project 3">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Project Name 3</h3>
          <p class="text-gray-500 text-sm">Brief description of the project highlighting key features.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-green-500 text-white text-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Business?</h2>
  <p class="text-lg mb-8">Contact us today and let’s discuss how we can help your business grow.</p>
  <a href="#contact" class="px-8 py-4 bg-white text-green-500 font-semibold rounded-lg hover:bg-gray-100 transition">
    Start Your Project
  </a>
</section>
@endsection