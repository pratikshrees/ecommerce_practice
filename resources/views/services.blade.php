<!DOCTYPE html>
<html>
<head>
  <title>Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navbar here -->
  @extends('layouts.master')
  @section('content')

  <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Our Services</h1>
    <ul class="list-disc pl-6 text-gray-600">
      <li>Web Development</li>
      <li>UI/UX Design</li>
      <li>Laravel & Tailwind Training</li>
    </ul>
  </div>
  @endsection
</body>
</html>
