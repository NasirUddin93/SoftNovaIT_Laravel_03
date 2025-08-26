@extends('layouts.app')
@Section('content')
<!-- Software Services Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">Software Services</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        We deliver innovative software solutions tailored to meet your business needs. From web apps to enterprise systems, we help you achieve efficiency and growth.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Service 1 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-desktop"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Web Application Development</h3>
        <p class="text-gray-600">
          Build scalable and secure web applications that deliver excellent performance and enhance user experience.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
        <p class="text-gray-600">
          Develop intuitive iOS and Android apps to reach your audience on the go and drive engagement.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-cloud"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Cloud Solutions</h3>
        <p class="text-gray-600">
          Leverage cloud computing for scalable, secure, and cost-effective business solutions.
        </p>
      </div>

      <!-- Service 4 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-cogs"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Enterprise Software</h3>
        <p class="text-gray-600">
          Custom software for enterprise-level businesses to manage processes, resources, and operations efficiently.
        </p>
      </div>

      <!-- Service 5 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-database"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Database Management</h3>
        <p class="text-gray-600">
          Optimized database solutions for storing, managing, and retrieving data effectively and securely.
        </p>
      </div>

      <!-- Service 6 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Software Security Solutions</h3>
        <p class="text-gray-600">
          Protect your applications and systems with advanced security protocols and risk management strategies.
        </p>
      </div>

    </div>

    <!-- CTA -->
    <div class="text-center mt-16">
      <a href="#contact" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        Get a Quote
      </a>
    </div>

  </div>
</section>

@endsection