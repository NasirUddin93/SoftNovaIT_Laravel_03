@extends('layouts.app')
@Section('content')
    <!-- Pricing Section -->
    <section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6 lg:px-16 text-center">

        <!-- Heading -->
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
        Our <span class="text-green-500">Pricing</span>
        </h2>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
        Choose a plan that fits your business needs. All plans include full support, updates, and reliable service.
        </p>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Basic Plan -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition">
            <h3 class="text-xl font-semibold mb-4">Basic</h3>
            <p class="text-green-500 text-3xl font-bold mb-4">৳1000<span class="text-gray-500 text-lg">/month</span></p>
            <ul class="mb-6 text-gray-600 space-y-2">
            <li>✅ Basic Website Support</li>
            <li>✅ Monthly Updates</li>
            <li>✅ 24/7 Email Support</li>
            </ul>
            <a href="#contact" class="block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
            Choose Plan
            </a>
        </div>

        <!-- Standard Plan -->
        <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-green-500 hover:shadow-2xl transition transform scale-105">
            <h3 class="text-xl font-semibold mb-4">Standard</h3>
            <p class="text-green-500 text-3xl font-bold mb-4">৳3000<span class="text-gray-500 text-lg">/month</span></p>
            <ul class="mb-6 text-gray-600 space-y-2">
            <li>✅ Full Website Support</li>
            <li>✅ Weekly Updates & Backups</li>
            <li>✅ Priority 24/7 Support</li>
            </ul>
            <a href="#contact" class="block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
            Choose Plan
            </a>
        </div>

        <!-- Premium Plan -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition">
            <h3 class="text-xl font-semibold mb-4">Premium</h3>
            <p class="text-green-500 text-3xl font-bold mb-4">৳5000<span class="text-gray-500 text-lg">/month</span></p>
            <ul class="mb-6 text-gray-600 space-y-2">
            <li>✅ Full Website + Marketing Support</li>
            <li>✅ Daily Updates & Backups</li>
            <li>✅ Dedicated 24/7 Support</li>
            </ul>
            <a href="#contact" class="block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
            Choose Plan
            </a>
        </div>

        </div>
    </div>
    </section>


@endsection  


