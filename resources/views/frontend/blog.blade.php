@extends('layouts.app')
@Section('content')

<!-- Blog Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Latest <span class="text-green-500">Blog Posts</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Explore our latest insights, tutorials, and updates in technology, digital marketing, and business growth.
      </p>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Blog Post 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Blog 1" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Top 10 SEO Strategies for 2025</h3>
          <p class="text-gray-600 mb-4">
            Learn the most effective SEO techniques to improve your website ranking and drive organic traffic in the coming year.
          </p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Blog 2" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Digital Marketing Trends to Watch</h3>
          <p class="text-gray-600 mb-4">
            Stay ahead with the latest digital marketing trends that can help your business grow and engage audiences effectively.
          </p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Blog 3" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Benefits of Web Development for Businesses</h3>
          <p class="text-gray-600 mb-4">
            Discover how professional web development can enhance your online presence, improve user experience, and boost conversions.
          </p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

    </div>

    <!-- View All Button -->
    <div class="text-center mt-12">
      <a href="/blog" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        View All Posts
      </a>
    </div>

  </div>
</section>
@endsection