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

      <!-- Team Member 1-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_1.png"  alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Aminesh Kumar Paul</h3>
          <p class="text-gray-500 mb-3">Executive Member</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 2-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_2.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Anwar Hossain Hiron</h3>
          <p class="text-gray-500 mb-3">Network and Server Engineer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 3-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_3.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">MD TAREK AHAMED</h3>
          <p class="text-gray-500 mb-3">Network and Server Engineer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 4-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_4.png" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Azizul Hakim</h3>
          <p class="text-gray-500 mb-3">Database Administrator</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <!-- Team Member 5-->
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

      <!-- Team Member 6-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_9.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Rownak Ahmed Oyshi</h3>
          <p class="text-gray-500 mb-3">QA Engineer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 7-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_6.png" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Ashraful Islam Emad</h3>
          <p class="text-gray-500 mb-3">Senior Web Developer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 8-->
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

      <!-- Team Member 9-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_11.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Fariha Nusrat Mumu</h3>
          <p class="text-gray-500 mb-3">Testing Engineer</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <!-- Team Member 10-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_10.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Saimum Hossain Sagor</h3>
          <p class="text-gray-500 mb-3">Technical Support</p>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <!-- Team Member 11-->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
        <img src="images/team_members/team_member_8.png" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Joy Krishna Mondal</h3>
          <p class="text-gray-500 mb-3">Marketing Executive</p>
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
