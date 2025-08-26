@extends('layouts.app')
@Section('content')
<!-- Shop Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">Products</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Explore our latest products. High quality, affordable, and designed to meet your needs.
      </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      <!-- Product Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Product 1" class="w-full h-64 object-cover">
        <div class="p-6 space-y-4">
          <h3 class="text-xl font-semibold">Product Name 1</h3>
          <p class="text-gray-500">Short description of the product highlighting key features.</p>
          <div class="flex justify-between items-center">
            <span class="text-green-500 font-bold text-lg">৳500</span>
            <div class="flex space-x-2">
              <a href="#" class="px-3 py-2 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition text-sm">Add to Cart</a>
              <a href="#" class="px-3 py-2 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-sm">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Product 2" class="w-full h-64 object-cover">
        <div class="p-6 space-y-4">
          <h3 class="text-xl font-semibold">Product Name 2</h3>
          <p class="text-gray-500">Short description of the product highlighting key features.</p>
          <div class="flex justify-between items-center">
            <span class="text-green-500 font-bold text-lg">৳750</span>
            <div class="flex space-x-2">
              <a href="#" class="px-3 py-2 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition text-sm">Add to Cart</a>
              <a href="#" class="px-3 py-2 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-sm">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Product 3" class="w-full h-64 object-cover">
        <div class="p-6 space-y-4">
          <h3 class="text-xl font-semibold">Product Name 3</h3>
          <p class="text-gray-500">Short description of the product highlighting key features.</p>
          <div class="flex justify-between items-center">
            <span class="text-green-500 font-bold text-lg">৳1200</span>
            <div class="flex space-x-2">
              <a href="#" class="px-3 py-2 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition text-sm">Add to Cart</a>
              <a href="#" class="px-3 py-2 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-sm">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Product 4" class="w-full h-64 object-cover">
        <div class="p-6 space-y-4">
          <h3 class="text-xl font-semibold">Product Name 4</h3>
          <p class="text-gray-500">Short description of the product highlighting key features.</p>
          <div class="flex justify-between items-center">
            <span class="text-green-500 font-bold text-lg">৳950</span>
            <div class="flex space-x-2">
              <a href="#" class="px-3 py-2 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition text-sm">Add to Cart</a>
              <a href="#" class="px-3 py-2 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition text-sm">View</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- View All Button -->
    <div class="text-center mt-12">
      <a href="/shop" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        View All Products
      </a>
    </div>

  </div>
</section>

@endsection