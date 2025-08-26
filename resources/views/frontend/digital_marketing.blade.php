@extends('layouts.app')
@Section('content')
<!-- Digital Marketing Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">Digital Marketing</span> Services
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        We help businesses grow online with our comprehensive digital marketing solutions. From SEO to social media, we create strategies that deliver measurable results.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Service 1 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-search"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">SEO Optimization</h3>
        <p class="text-gray-600">
          Improve your search engine rankings and drive organic traffic to your website with our expert SEO strategies.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-bullhorn"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Social Media Marketing</h3>
        <p class="text-gray-600">
          Engage your audience on platforms like Facebook, Instagram, and LinkedIn to boost your brand presence and sales.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-envelope"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Email Marketing</h3>
        <p class="text-gray-600">
          Reach your customers directly with personalized email campaigns that increase engagement and conversions.
        </p>
      </div>

      <!-- Service 4 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">PPC Advertising</h3>
        <p class="text-gray-600">
          Run effective pay-per-click campaigns to drive targeted traffic and generate leads for your business.
        </p>
      </div>

      <!-- Service 5 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-video"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Content Marketing</h3>
        <p class="text-gray-600">
          Create valuable content that engages your audience, builds trust, and positions your brand as an industry leader.
        </p>
      </div>

      <!-- Service 6 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="text-green-500 text-4xl mb-4">
          <i class="fas fa-globe"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Web Analytics</h3>
        <p class="text-gray-600">
          Track and analyze your website performance to optimize marketing strategies and maximize ROI.
        </p>
      </div>

    </div>

  </div>
</section>

@endsection