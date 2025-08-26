@extends('layouts.app')
@Section('content')
<!-- Careers Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Join Our <span class="text-green-500">Team</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        We are always looking for talented and motivated individuals. Explore our current openings and be a part of our innovative team.
      </p>
    </div>

    <!-- Open Positions -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Job Card 1 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <h3 class="text-xl font-semibold mb-2">Frontend Developer</h3>
        <p class="text-gray-600 mb-4">Location: Dhaka, Bangladesh | Full-time</p>
        <p class="text-gray-600 text-sm mb-4">Work on responsive web apps, implement UI components, and collaborate with designers and backend developers to build modern web solutions.</p>
        <a href="#apply" class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Apply Now</a>
      </div>

      <!-- Job Card 2 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <h3 class="text-xl font-semibold mb-2">Backend Developer</h3>
        <p class="text-gray-600 mb-4">Location: Dhaka, Bangladesh | Full-time</p>
        <p class="text-gray-600 text-sm mb-4">Design and implement robust backend systems using Laravel, manage databases, APIs, and ensure security and scalability of web applications.</p>
        <a href="#apply" class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Apply Now</a>
      </div>

      <!-- Job Card 3 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <h3 class="text-xl font-semibold mb-2">UI/UX Designer</h3>
        <p class="text-gray-600 mb-4">Location: Remote | Full-time</p>
        <p class="text-gray-600 text-sm mb-4">Create visually appealing and user-friendly designs, wireframes, and prototypes for web and mobile applications to enhance user experience.</p>
        <a href="#apply" class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Apply Now</a>
      </div>

      <!-- Job Card 4 -->
      <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <h3 class="text-xl font-semibold mb-2">Digital Marketing Specialist</h3>
        <p class="text-gray-600 mb-4">Location: Dhaka, Bangladesh | Full-time</p>
        <p class="text-gray-600 text-sm mb-4">Develop and execute marketing campaigns, manage social media, SEO, and analytics to drive growth and brand awareness.</p>
        <a href="#apply" class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Apply Now</a>
      </div>

    </div>

    <!-- Call to Action -->
    <div class="text-center mt-16">
      <h2 class="text-3xl font-bold mb-4">Can’t find a role that fits?</h2>
      <p class="text-gray-600 mb-6">We are always open to talented individuals. Send us your resume and join our talent pool.</p>
      <a href="#contact" class="inline-block px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        Send Resume
      </a>
    </div>

  </div>
</section>


@endsection  