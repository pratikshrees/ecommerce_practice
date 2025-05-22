<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navbar here -->
   @extends('layouts.master')
   @section('content')
  <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">About Us</h1>
    <p class="text-gray-600">We are a small team building responsive websites using Laravel and Tailwind.</p>
  </div>
  @endsection
</body>
</html>
