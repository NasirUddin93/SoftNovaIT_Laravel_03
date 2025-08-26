@extends('layouts.app')
@Section('content')
<!-- Mission & Vision Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Page Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">Mission & Vision</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        At SoftNovaIT, we are driven by a strong purpose and a clear vision. Learn about our goals, values, and the impact we aim to create.
      </p>
    </div>

    <!-- Mission & Vision Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

      <!-- Mission Card -->
      <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 flex items-center justify-center bg-green-500 text-white rounded-full mr-4 text-2xl font-bold">
            M
          </div>
          <h2 class="text-2xl font-semibold">Our Mission</h2>
        </div>
        <p class="text-gray-600">
          Our mission is to empower businesses with innovative digital solutions that drive growth and success. We focus on quality, technology, and creativity to help our clients achieve their goals.
        </p>
      </div>

      <!-- Vision Card -->
      <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 flex items-center justify-center bg-green-500 text-white rounded-full mr-4 text-2xl font-bold">
            V
          </div>
          <h2 class="text-2xl font-semibold">Our Vision</h2>
        </div>
        <p class="text-gray-600">
          Our vision is to become a leading digital solutions provider, recognized for excellence, innovation, and long-term client partnerships. We aim to transform businesses globally through impactful technology solutions.
        </p>
      </div>

    </div>

    <!-- Call to Action -->
    <div class="text-center mt-16">
      <a href="#contact" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        Contact Us
      </a>
    </div>

  </div>
</section>


@endsection  