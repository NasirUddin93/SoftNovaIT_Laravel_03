@extends('layouts.app')
@Section('content')
<!-- Coming Soon Section -->
<section class="bg-gray-900 min-h-screen flex items-center justify-center px-6">
  <div class="text-center text-white max-w-lg">

    <!-- Logo / Brand -->
    <h1 class="text-5xl font-bold mb-4">
      SoftNovaIT
    </h1>

    <!-- Message -->
    <p class="text-gray-300 mb-8">
      We’re launching something amazing! Stay tuned for updates.
    </p>

    <!-- Countdown Timer -->
    <div id="countdown" class="flex justify-center space-x-6 text-2xl font-bold mb-8">
      <div>
        <span id="days">00</span>
        <p class="text-gray-400 text-sm">Days</p>
      </div>
      <div>
        <span id="hours">00</span>
        <p class="text-gray-400 text-sm">Hours</p>
      </div>
      <div>
        <span id="minutes">00</span>
        <p class="text-gray-400 text-sm">Minutes</p>
      </div>
      <div>
        <span id="seconds">00</span>
        <p class="text-gray-400 text-sm">Seconds</p>
      </div>
    </div>

    <!-- Email Subscription -->
    <form class="flex justify-center space-x-2 mb-6">
      <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-lg text-gray-900 w-2/3 focus:outline-none">
      <button type="submit" class="bg-green-500 px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Notify Me</button>
    </form>

    <!-- Social Links -->
    <div class="flex justify-center space-x-6 text-gray-400">
      <a href="#" class="hover:text-green-500"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="hover:text-green-500"><i class="fab fa-twitter"></i></a>
      <a href="#" class="hover:text-green-500"><i class="fab fa-linkedin-in"></i></a>
      <a href="#" class="hover:text-green-500"><i class="fab fa-instagram"></i></a>
    </div>

  </div>
</section>

<!-- Countdown Script -->
<script>
  const countdownDate = new Date("Dec 31, 2025 00:00:00").getTime();
  const countdownElement = setInterval(() => {
    const now = new Date().getTime();
    const distance = countdownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").textContent = days.toString().padStart(2, '0');
    document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
    document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
    document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');

    if (distance < 0) {
      clearInterval(countdownElement);
      document.getElementById("countdown").textContent = "Launched!";
    }
  }, 1000);
</script>


@endsection  