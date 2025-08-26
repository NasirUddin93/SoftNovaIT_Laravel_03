@extends('layouts.app')
@Section('content')
<!-- Contact Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Get in <span class="text-green-500">Touch</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        We are here to answer your questions. Fill out the form below or contact us via the information provided.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

      <!-- Contact Info -->
      <div class="space-y-8">
        <div>
          <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
          <p class="text-gray-600 mb-2"><strong>Address:</strong> 123 SoftNovaIT Street, Dhaka, Bangladesh</p>
          <p class="text-gray-600 mb-2"><strong>Phone:</strong> +8801707568468</p>
          <p class="text-gray-600 mb-2"><strong>Email:</strong> nasir93cse@gmail.com</p>
        </div>

        <div>
          <h2 class="text-2xl font-semibold mb-4">Follow Us</h2>
          <div class="flex space-x-4 text-gray-600">
            <a href="#" class="hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-green-500"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="hover:text-green-500"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="/contact" method="POST" class="space-y-6">
          @csrf
          <div>
            <label for="name" class="block mb-2 font-semibold text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>
          <div>
            <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>
          <div>
            <label for="subject" class="block mb-2 font-semibold text-gray-700">Subject</label>
            <input type="text" name="subject" id="subject" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>
          <div>
            <label for="message" class="block mb-2 font-semibold text-gray-700">Message</label>
            <textarea name="message" id="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
          </div>
          <button type="submit" class="w-full bg-green-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-600 transition">
            Send Message
          </button>
        </form>
      </div>

    </div>

  </div>
</section>

@endsection