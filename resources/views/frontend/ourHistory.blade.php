@extends('layouts.app')
@Section('content')
<!-- Our History Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">History</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Discover how we started and the milestones we achieved over the years. Our journey reflects our growth, values, and commitment to excellence.
      </p>
    </div>

    <!-- Timeline -->
    <div class="relative border-l-2 border-green-500 ml-4">
      
      <!-- Timeline Item -->
      <div class="mb-10 ml-6">
        <span class="absolute -left-4 flex items-center justify-center w-8 h-8 bg-green-500 rounded-full text-white font-bold">2010</span>
        <h3 class="text-xl font-semibold mb-2">Company Founded</h3>
        <p class="text-gray-600">
          Our journey began in 2010 with a small team of passionate professionals aiming to create innovative digital solutions.
        </p>
      </div>

      <!-- Timeline Item -->
      <div class="mb-10 ml-6">
        <span class="absolute -left-4 flex items-center justify-center w-8 h-8 bg-green-500 rounded-full text-white font-bold">2013</span>
        <h3 class="text-xl font-semibold mb-2">First 100 Clients</h3>
        <p class="text-gray-600">
          By 2013, we successfully served over 100 clients and established ourselves as a reliable digital solutions provider.
        </p>
      </div>

      <!-- Timeline Item -->
      <div class="mb-10 ml-6">
        <span class="absolute -left-4 flex items-center justify-center w-8 h-8 bg-green-500 rounded-full text-white font-bold">2016</span>
        <h3 class="text-xl font-semibold mb-2">Expansion & Growth</h3>
        <p class="text-gray-600">
          Expanded our team and services to include web development, digital marketing, and design, catering to national and international clients.
        </p>
      </div>

      <!-- Timeline Item -->
      <div class="mb-10 ml-6">
        <span class="absolute -left-4 flex items-center justify-center w-8 h-8 bg-green-500 rounded-full text-white font-bold">2020</span>
        <h3 class="text-xl font-semibold mb-2">50+ Top Companies Served</h3>
        <p class="text-gray-600">
          We have partnered with over 50 top companies, delivering high-quality solutions and building long-term relationships.
        </p>
      </div>

      <!-- Timeline Item -->
      <div class="mb-10 ml-6">
        <span class="absolute -left-4 flex items-center justify-center w-8 h-8 bg-green-500 rounded-full text-white font-bold">2025</span>
        <h3 class="text-xl font-semibold mb-2">Leading in Digital Solutions</h3>
        <p class="text-gray-600">
          Today, we continue to innovate, helping businesses grow with cutting-edge digital services and unmatched customer support.
        </p>
      </div>

    </div>

  </div>
</section>


@endsection  