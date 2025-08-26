@extends('layouts.app')
@Section('content')
<!-- FAQ Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-16">
    
    <!-- Heading -->
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Frequently Asked <span class="text-green-500">Questions</span>
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Here are some of the most common questions about our services, pricing, and support.
      </p>
    </div>

    <!-- FAQ Items -->
    <div class="max-w-3xl mx-auto space-y-4">

      <!-- FAQ Item -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <button class="w-full text-left flex justify-between items-center faq-btn font-semibold text-gray-800">
          What services do you offer?
          <span class="text-green-500 transition-transform transform">+</span>
        </button>
        <div class="faq-content mt-2 text-gray-600 hidden">
          We provide web development, digital marketing, SEO optimization, UI/UX design, and complete website support services for businesses of all sizes.
        </div>
      </div>

      <!-- FAQ Item -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <button class="w-full text-left flex justify-between items-center faq-btn font-semibold text-gray-800">
          How much does your website support cost?
          <span class="text-green-500 transition-transform transform">+</span>
        </button>
        <div class="faq-content mt-2 text-gray-600 hidden">
          Our website support starts at ৳1,000 per month and includes updates, maintenance, backups, and technical assistance.
        </div>
      </div>

      <!-- FAQ Item -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <button class="w-full text-left flex justify-between items-center faq-btn font-semibold text-gray-800">
          Can I upgrade my plan later?
          <span class="text-green-500 transition-transform transform">+</span>
        </button>
        <div class="faq-content mt-2 text-gray-600 hidden">
          Yes! You can upgrade or change your plan at any time based on your website needs.
        </div>
      </div>

      <!-- FAQ Item -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <button class="w-full text-left flex justify-between items-center faq-btn font-semibold text-gray-800">
          How do I contact support?
          <span class="text-green-500 transition-transform transform">+</span>
        </button>
        <div class="faq-content mt-2 text-gray-600 hidden">
          You can contact our support team via email, live chat, or phone. We provide 24/7 assistance for all our plans.
        </div>
      </div>

    </div>

  </div>
</section>

<!-- FAQ Accordion Script -->
<script>
  const faqButtons = document.querySelectorAll('.faq-btn');
  faqButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('span');
      content.classList.toggle('hidden');
      icon.textContent = content.classList.contains('hidden') ? '+' : '−';
    });
  });
</script>


@endsection  