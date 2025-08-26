@extends('layouts.app')

@section('content')

<!-- Latest Posts Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 lg:px-16 text-center">
    
    <!-- Heading -->
    <h2 class="text-3xl font-bold mb-12">Latest Posts</h2>
    <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
      Stay updated with our latest news, tips, and insights in technology, digital marketing, and software development.
    </p>

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

      <!-- Blog Post Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Post 1" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">How to Boost Your Website SEO</h3>
          <p class="text-gray-500 text-sm mb-4">Learn the top strategies to improve your website ranking and drive more traffic.</p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

      <!-- Blog Post Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Post 2" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Top 5 Digital Marketing Trends in 2025</h3>
          <p class="text-gray-500 text-sm mb-4">Stay ahead of your competition by following the latest digital marketing trends.</p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

      <!-- Blog Post Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/400x250" alt="Post 3" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">5 Tips for Effective Web Development</h3>
          <p class="text-gray-500 text-sm mb-4">Boost your web development workflow with these practical and effective tips.</p>
          <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>

    </div>

    <!-- View All Posts Button -->
    <div class="mt-12">
      <a href="/blog" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        View All Posts
      </a>
    </div>

  </div>
</section>


@endsection
