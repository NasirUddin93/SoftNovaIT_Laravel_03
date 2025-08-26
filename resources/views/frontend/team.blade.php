@extends('layouts.app')
@Section('content')
<!-- Team Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Meet Our <span class="text-green-500">Team</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Our team of talented professionals is dedicated to delivering innovative solutions and exceptional service to our clients.
      </p>
    </div>

    <!-- Team Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      <!-- Team Member -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_5.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Nasir Uddin</h3>
          <p class="text-gray-500 mb-3">Software Engineer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_7.png" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Syed Mominul Islam</h3>
          <p class="text-gray-500 mb-3">Web Developer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Md. Shaimum Hasan Sagor</h3>
          <p class="text-gray-500 mb-3">Digital Marketing Expert</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="https://via.placeholder.com/300x300" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Jane Doe</h3>
          <p class="text-gray-500 mb-3">UI/UX Designer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection  