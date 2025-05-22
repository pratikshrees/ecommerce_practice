<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navbar here -->
  @extends('layouts.master')
  @section('content')

  <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Contact Us</h1>
    <form class="space-y-4">
      <input type="text" placeholder="Your Name" class="w-full p-2 border rounded" />
      <input type="email" placeholder="Your Email" class="w-full p-2 border rounded" />
      <textarea placeholder="Message" class="w-full p-2 border rounded"></textarea>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Send</button>
    </form>
  </div>
  @endsection
</body>
</html>
