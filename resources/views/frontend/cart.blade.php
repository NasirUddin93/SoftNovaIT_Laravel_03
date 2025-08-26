@extends('layouts.app')
@Section('content')
<!-- Cart Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">

    <!-- Heading -->
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold mb-2">Your <span class="text-green-500">Shopping Cart</span></h1>
      <p class="text-gray-600">Review your selected products, adjust quantities, or remove items before checkout.</p>
    </div>

    <!-- Cart Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white rounded-lg shadow-lg">
        <thead>
          <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Product</th>
            <th class="py-3 px-6 text-center">Price</th>
            <th class="py-3 px-6 text-center">Quantity</th>
            <th class="py-3 px-6 text-center">Total</th>
            <th class="py-3 px-6 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm font-light">

          <!-- Cart Item Example -->
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-3 px-6 text-left flex items-center gap-4">
              <img src="https://via.placeholder.com/80" alt="Product 1" class="w-16 h-16 object-cover rounded-lg">
              <span class="font-medium">Product Name 1</span>
            </td>
            <td class="py-3 px-6 text-center">৳500</td>
            <td class="py-3 px-6 text-center">
              <input type="number" value="1" min="1" class="w-16 text-center border rounded">
            </td>
            <td class="py-3 px-6 text-center">৳500</td>
            <td class="py-3 px-6 text-center">
              <button class="text-red-500 hover:text-red-700 font-semibold">Remove</button>
            </td>
          </tr>

          <!-- Repeat Cart Item -->
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-3 px-6 text-left flex items-center gap-4">
              <img src="https://via.placeholder.com/80" alt="Product 2" class="w-16 h-16 object-cover rounded-lg">
              <span class="font-medium">Product Name 2</span>
            </td>
            <td class="py-3 px-6 text-center">৳750</td>
            <td class="py-3 px-6 text-center">
              <input type="number" value="2" min="1" class="w-16 text-center border rounded">
            </td>
            <td class="py-3 px-6 text-center">৳1500</td>
            <td class="py-3 px-6 text-center">
              <button class="text-red-500 hover:text-red-700 font-semibold">Remove</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- Cart Summary -->
    <div class="mt-12 max-w-md mx-auto bg-white rounded-lg shadow-lg p-6 space-y-4">
      <h2 class="text-2xl font-semibold text-gray-800">Cart Summary</h2>
      <div class="flex justify-between text-gray-700">
        <span>Subtotal</span>
        <span>৳2000</span>
      </div>
      <div class="flex justify-between text-gray-700">
        <span>Tax (5%)</span>
        <span>৳100</span>
      </div>
      <div class="flex justify-between font-bold text-gray-800 text-lg">
        <span>Total</span>
        <span>৳2100</span>
      </div>
      <a href="/checkout" class="block w-full text-center px-6 py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition">
        Proceed to Checkout
      </a>
    </div>

  </div>
</section>

@endsection