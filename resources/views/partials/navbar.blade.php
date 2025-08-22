

<header class="bg-gray-900 shadow-md fixed w-full top-0 z-50"> <!-- Changed to white bg, fixed position -->
  <div class="container mx-auto px-4 flex justify-between items-center py-4">
    <!-- Logo -->
    <div class="text-2xl font-bold">
      <a href="{{ url('/') }}" class="text-white hover:text-green-500 transition-colors">
        SoftNovaIT
      </a>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-1 relative">
      <ul class="flex space-x-1">

        <!-- Home -->
        <li class="relative group">
          <a href="{{ url('/') }}" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors flex items-center">
            Home
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
            <li><a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Home 1</a></li>
            <li><a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Home 2</a></li>
          </ul>
        </li>

        <!-- Pages -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors flex items-center">
            Pages
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">About Us</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Pricing</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Careers</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Our History</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Mission Vision</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">FAQ</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Team</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Team Single</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Typography</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Page Left Sidebar</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Page Right Sidebar</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">404 Page</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Coming Soon</a></li>
          </ul>
        </li>

        <!-- Services -->
        <li class="relative group">
          <a href="/services" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors flex items-center">
            Services
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Web Services</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Software Services</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">SEO Optimization</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Digital Marketing</a></li>
          </ul>
        </li>

        <!-- Blog -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors flex items-center">
            Blog
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Latest Posts</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Single Post</a></li>
          </ul>
        </li>

        <!-- Shop -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors flex items-center">
            Shop
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Products</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-green-500 transition-colors">Cart</a></li>
          </ul>
        </li>

        <!-- Contact (no submenu) -->
        <li>
          <a href="#" class="font-semibold text-white hover:text-green-500 px-4 py-2 transition-colors block">
            Contact
          </a>
        </li>
      </ul>
    </nav>

    <!-- CTA Button (Like NetCraft theme) -->
    <div class="hidden md:block">
      <a href="#contact" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors shadow-md hover:shadow-lg">
        Get Started
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <div class="md:hidden cursor-pointer" id="mobile-menu-btn">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="white">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </div>
  </div>

  <!-- Mobile Menu -->
  <nav class="hidden md:hidden bg-white text-gray-700 px-4 shadow-lg" id="mobile-menu">
    <ul class="space-y-1 py-4">
      <li>
        <button class="w-full text-left font-semibold text-lg py-3 flex justify-between items-center toggle-submenu">
          Home <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Home 1</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Home 2</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-3 flex justify-between items-center toggle-submenu">
          Pages <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">About Us</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Pricing</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Careers</a></li>
          <!-- Other page links... -->
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-3 flex justify-between items-center toggle-submenu">
          Services <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Web Services</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Software Services</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">SEO Optimization</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Digital Marketing</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-3 flex justify-between items-center toggle-submenu">
          Blog <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Latest Posts</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Single Post</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-3 flex justify-between items-center toggle-submenu">
          Shop <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Products</a></li>
          <li><a href="#" class="block py-2 px-4 hover:bg-green-50 hover:text-green-500 rounded">Cart</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="block font-semibold text-lg py-3">Contact</a>
      </li>
      <li class="pt-2">
        <a href="#contact" class="block bg-green-500 hover:bg-green-600 text-white font-semibold text-center px-6 py-3 rounded-lg transition-colors">
          Get Started
        </a>
      </li>
    </ul>
  </nav>
</header>

<script>
  // Toggle mobile menu
  document.getElementById("mobile-menu-btn").addEventListener("click", function () {
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenu.classList.toggle("hidden");

    // Change icon based on menu state
    const iconPaths = this.querySelector('path');
    if (mobileMenu.classList.contains('hidden')) {
      iconPaths.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
    } else {
      iconPaths.setAttribute('d', 'M6 18L18 6M6 6l12 12');
    }
  });

  // Toggle submenus in mobile
  document.querySelectorAll(".toggle-submenu").forEach(button => {
    button.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      submenu.classList.toggle("hidden");

      // Rotate arrow
      const arrow = this.querySelector('span');
      arrow.classList.toggle('rotate-180');
    });
  });

  // Close mobile menu when clicking outside
  document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');

    if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
      // Reset menu icon
      const iconPaths = mobileMenuBtn.querySelector('path');
      iconPaths.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
    }
  });
</script>

