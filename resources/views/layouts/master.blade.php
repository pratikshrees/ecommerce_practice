<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tailwind Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <nav class="bg-blue-300 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="/" class="text-bold text-xl font-bold text-blue-600">MyLogo</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 items-center">
          <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
          <a href="/about" class="text-gray-700 hover:text-blue-600">About</a>
          <a href="/services" class="text-gray-700 hover:text-blue-600">Services</a>
          <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact</a>
          <a href="/login" class="text-gray-700 hover:text-blue-600">login</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
          <button onclick="toggleMenu()" class="text-gray-700 focus:outline-none">
            ☰
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
      <a href="/" class="block text-gray-700 py-2 hover:text-blue-600">Home</a>
      <a href="/about" class="block text-gray-700 py-2 hover:text-blue-600">About</a>
      <a href="/services" class="block text-gray-700 py-2 hover:text-blue-600">Services</a>
      <a href="/contact" class="block text-gray-700 py-2 hover:text-blue-600">Contact</a>
    </div>
       
    </footer>

    <script>
      function toggleMenu() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
      }
    </script>
  </nav>

  @yield('content')

  <footer class="text-center bg-gray-500 text-white p-4 mt-5">
      <p>&copy: @2025 My laravel Project</p>
      <p>Created by Me</p>
  </footer>
</body>
</html>
