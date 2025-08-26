@extends('layouts.app')
@Section('content')
<!-- Single Blog Post -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Post Header -->
    <div class="max-w-3xl mx-auto mb-12 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Top 10 SEO Strategies for 2025</h1>
      <p class="text-gray-500 mb-2">By <span class="font-semibold">Nasir Uddin</span> | Aug 26, 2025</p>
      <div class="flex justify-center space-x-4 text-gray-400">
        <a href="#" class="hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:text-green-500"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Post Content -->
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8 space-y-8">

      <!-- Featured Image -->
      <img src="https://via.placeholder.com/800x400" alt="SEO Strategies" class="rounded-lg w-full object-cover">

      <!-- Post Text -->
      <div class="space-y-6 text-gray-700">
        <p>
          SEO is critical for driving organic traffic and improving your website’s visibility. In 2025, businesses need to focus on a combination of technical SEO, content marketing, and user experience to rank higher in search engines.
        </p>
        <p>
          Keyword research, on-page optimization, link building, and regular audits are essential components of an effective SEO strategy. Monitoring performance and adapting to algorithm changes ensures consistent results.
        </p>
        <h2 class="text-2xl font-semibold mt-6">Key SEO Techniques</h2>
        <ul class="list-disc pl-6 space-y-2">
          <li>Perform in-depth keyword research to target relevant search terms.</li>
          <li>Optimize meta tags, headings, and content structure for SEO.</li>
          <li>Build high-quality backlinks to improve domain authority.</li>
          <li>Enhance website speed, mobile responsiveness, and UX.</li>
        </ul>
        <p>
          By implementing these strategies, businesses can improve search visibility, attract qualified traffic, and achieve long-term growth.
        </p>
      </div>

      <!-- Author Info -->
      <div class="flex items-center space-x-4 mt-8 border-t pt-6">
        <img src="https://via.placeholder.com/80" alt="Author" class="w-20 h-20 rounded-full object-cover">
        <div>
          <h3 class="font-semibold text-lg">Nasir Uddin</h3>
          <p class="text-gray-500">Head of CSE Department & Digital Marketing Expert</p>
        </div>
      </div>

    </div>

    <!-- Related Posts -->
    <div class="max-w-5xl mx-auto mt-16">
      <h2 class="text-3xl font-bold mb-8 text-center">Related Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Blog 1" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Digital Marketing Trends 2025</h3>
            <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Blog 2" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Content Marketing Tips</h3>
            <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://via.placeholder.com/400x250" alt="Blog 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Web Development Best Practices</h3>
            <a href="#" class="text-green-500 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

@endsection