
<header class="bg-gray-900 shadow-lg">
  <div class="container mx-auto px-4 flex justify-between items-center py-6">
    <!-- Logo -->
    <div class="text-2xl text-white font-bold">SoftNovaIT</div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6 relative">
      <ul class="flex space-x-6">

        <!-- Home -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Home</a>
          <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Home 1</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Home 2</a></li>
          </ul>
        </li>

        <!-- Pages -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Pages</a>
          <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">About Us</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Pricing</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Careers</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Ours History</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Mission Vision</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Fqa</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Team</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Team Single</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Typography</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Page Left Sidebar</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Page Right Sidebar</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">404 Page</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Coming Soon</a></li>
          </ul>
        </li>

        <!-- Services -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Services</a>
          <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Web Development</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">SEO Optimization</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Digital Marketing</a></li>
          </ul>
        </li>

        <!-- Blog -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Blog</a>
          <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Latest Posts</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Single Post</a></li>
          </ul>
        </li>

        <!-- Shop -->
        <li class="relative group">
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Shop</a>
          <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Products</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Cart</a></li>
          </ul>
        </li>

        <!-- Contact (no submenu) -->
        <li>
          <a href="#" class="font-semibold text-white text-xl p-4 hover:text-green-500">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Mobile Menu Button -->
    <div class="md:hidden cursor-pointer" id="mobile-menu-btn">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="white">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </div>
  </div>

  <!-- Mobile Menu -->
  <nav class="hidden md:hidden bg-gray-900 text-white px-4" id="mobile-menu">
    <ul class="space-y-2">
      <li>
        <button class="w-full text-left font-semibold text-lg py-2 flex justify-between items-center toggle-submenu">
          Home <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="border-b border-gray-600 block py-4">Home 1</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Home 2</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-2 flex justify-between items-center toggle-submenu">
          Pages <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="border-b border-gray-600 block py-4">About Us</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Pricing</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Careers</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Our History</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Mission Vision</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">FAQ</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Team</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Team Single</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Typography</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Page Left sidebar</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Page Right Sidebar</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">404 Page</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Coming Soon</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-2 flex justify-between items-center toggle-submenu">
          Services <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="border-b border-gray-600 block py-4">Web Development</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">SEO Optimization</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Digital Marketing</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-2 flex justify-between items-center toggle-submenu">
          Blog <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="border-b border-gray-600 block py-4">Latest Posts</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Single Post</a></li>
        </ul>
      </li>
      <li>
        <button class="w-full text-left font-semibold text-lg py-2 flex justify-between items-center toggle-submenu">
          Shop <span>▾</span>
        </button>
        <ul class="hidden pl-4 space-y-1">
          <li><a href="#" class="border-b border-gray-600 block py-4">Products</a></li>
          <li><a href="#" class="border-b border-gray-600 block py-4">Cart</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="block font-semibold text-lg py-2">Contact</a>
      </li>
    </ul>
  </nav>
</header>

<script>
  // Toggle mobile menu
  document.getElementById("mobile-menu-btn").addEventListener("click", function () {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  });

  // Toggle submenus in mobile
  document.querySelectorAll(".toggle-submenu").forEach(button => {
    button.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      submenu.classList.toggle("hidden");
    });
  });
</script>

