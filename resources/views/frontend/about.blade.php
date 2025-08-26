@extends('layouts.app')
@section('content')
<!-- About Us Page -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Page Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
        About <span class="text-green-500">Us</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Learn more about our mission, values, and the team that makes everything possible. We deliver innovative solutions to help businesses grow and succeed online.
      </p>
    </div>

    <!-- Image + Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left Image -->
      <div class="rounded-2xl overflow-hidden shadow-lg">
        <img src="images/about-banner.jpg" alt="About Us" class="w-full h-full object-cover">
      </div>

      <!-- Right Content -->
      <div class="space-y-6">
        <h2 class="text-3xl font-bold text-gray-800">Our Story</h2>
        <p class="text-gray-600">
          We are a team of passionate professionals committed to delivering top-notch digital solutions. With years of experience in web development, digital marketing, and design, we help businesses achieve their online goals.
        </p>

        <h2 class="text-3xl font-bold text-gray-800">Our Mission</h2>
        <p class="text-gray-600">
          Our mission is to empower businesses with creative and effective digital solutions. We focus on quality, innovation, and customer satisfaction in everything we do.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-6">
          <div class="text-center">
            <h3 class="text-3xl font-bold text-green-500">500+</h3>
            <p class="text-gray-600 text-sm">Projects Completed</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-green-500">100+</h3>
            <p class="text-gray-600 text-sm">Happy Clients</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-green-500">50+</h3>
            <p class="text-gray-600 text-sm">Top Companies</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-green-500">10+</h3>
            <p class="text-gray-600 text-sm">Years Experience</p>
          </div>
        </div>

        <!-- CTA Button -->
        <a href="#contact" class="inline-block mt-6 px-6 py-3 bg-green-500 text-white rounded-lg font-semibold shadow-md hover:bg-green-600 transition">
          Contact Us
        </a>
      </div>
    </div>

  </div>
</section>

@endsection