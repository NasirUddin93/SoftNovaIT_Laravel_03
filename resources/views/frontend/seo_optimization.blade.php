@extends('layouts.app')
@Section('content')
<!-- SEO Optimization Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        <span class="text-green-500">SEO Optimization</span> Services
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Improve your website’s visibility and drive organic traffic with our expert SEO strategies tailored for your business growth.
      </p>
    </div>

    <!-- Two Column Layout -->
    <div class="flex flex-col lg:flex-row items-center gap-12">

      <!-- Image / Illustration -->
      <div class="lg:w-1/2">
        <img src="images/services-banner.jpg" alt="SEO Optimization" class="rounded-xl shadow-lg">
      </div>

      <!-- Content -->
      <div class="lg:w-1/2 space-y-6">
        <h2 class="text-2xl font-semibold text-gray-800">Why SEO Matters</h2>
        <p class="text-gray-600">
          SEO helps your website rank higher on search engines, increases visibility, and attracts qualified traffic that converts. Our team uses proven strategies to improve your website’s performance.
        </p>

        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <span class="text-green-500 text-2xl">✔</span>
            <p class="text-gray-600">Keyword Research & Optimization</p>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-green-500 text-2xl">✔</span>
            <p class="text-gray-600">On-Page & Off-Page SEO</p>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-green-500 text-2xl">✔</span>
            <p class="text-gray-600">Technical SEO & Website Audits</p>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-green-500 text-2xl">✔</span>
            <p class="text-gray-600">SEO Analytics & Reporting</p>
          </li>
        </ul>

        <a href="#contact" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
          Get Started
        </a>
      </div>

    </div>

  </div>
</section>

@endsection