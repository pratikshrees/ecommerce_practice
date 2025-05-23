@extends('layouts.app')
@section('title','Create Catagories')
@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="order" placeholder="Order">
    <input type="text" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="name" placeholder="Categories Name">
    <div class="flex justify-center mt-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Categories</button>
        <a href="{{ route('categories.index') }}" class="bg-red-500 text-white px-8 py-2 rounded-lg ml-2">Cancel</a>
    </div>
</form>

@endsection