<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SoftNovaIT provides expert Web Design, Software Development, Mobile Apps, Data Science, AI Applications, and Security solutions.">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'SoftNovaIT')</title>
     <script src="https://cdn.tailwindcss.com"></script>
    @stack('head-scripts') {{-- For scripts that MUST be in the head --}}
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
</head>
<body class="bg-white text-gray-900">
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <!-- Load jQuery and main scripts at the end of the body -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @stack('scripts') {{-- For your page-specific jQuery/JS files --}}
</body>
</html>
