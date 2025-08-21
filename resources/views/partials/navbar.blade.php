<header class="bg-gray-900 text-white">
  <div class="container mx-auto flex justify-between items-center p-8">
    <div class="logo text-3xl font-bold">SoftnovaIT</div>
    <nav>
      <ul class="hidden md:flex space-x-6">
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Home</a></li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Pages</a></li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Services
                {{-- <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>  --}}
             </a>
            <!-- Submenu -->
            <ul class="absolute left-0 mt-0 hidden group-hover:block bg-black text-white min-w-[200px] rounded-md shadow-lg">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Web Development</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">SEO Optimization</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">Digital Marketing</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-800">UI/UX Design</a></li>
            </ul>
        </li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Case Study</a></li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Blog</a></li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Shop</a></li>
        <li><a href="#" class="hover:text-green-500 font-semibold text-xl p-4 hover:text-green-500">Contact</a></li>
      </ul>
      <!-- Hamburger -->
      <div class="md:hidden cursor-pointer" id="mobile-menu-btn">
        <!-- Hamburger Icon -->
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" 
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" 
                d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </div>
    </nav>
  </div>

  <!-- Mobile Menu -->
  <div class="hidden md:hidden bg-gray-900 text-white" id="mobile-menu">
    <ul class="flex flex-col p-4 space-y-4">
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home
        <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg> 
        
    </a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
      <li class="border-b border-gray-500 font-semibold text-xl p-4 hover:text-green-500"><a href="#">Home</a></li>
    </ul>
  </div>

  <script>
    $(document).ready(function(){
        $('#mobile-menu-btn').click(function(){
            $('#mobile-menu').slideToggle();
        });
    });
  </script>
</header>
