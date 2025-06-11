<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tailwind Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  @php
   $categories= \App\Models\Category::orderBy('order','asc')->get();
  @endphp
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
          @foreach ($categories as $category)
            <a href="" class="text-gray-700 hover:text-blue-600">{{$category->name}}</a>
          @endforeach
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="text-center bg-gray-500 text-white p-4 mt-5">
      <p>&copy: @2025 My laravel Project</p>
      <p>Created by Me</p>
  </footer>
</body>
</html>
