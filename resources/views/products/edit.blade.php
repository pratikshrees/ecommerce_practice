@extends('layouts.app')
@section('title','Edit Products')

@section('content')
<form action="{{ route('products.update')}" method="POST" enctype="multipart/form-data">
    @csrf
    <select name="category_id" id="" class="border border-gray-200 p-2 rounded-md w-full mb-3"></select>
    <input type="text" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="name" placeholder="Product Name" value="{{ old('name') }}">
    @error('name')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <input type="number" step="0.01" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="price" placeholder="Price" value="{{ old('price') }}">
    @error('price')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <textarea class="border border-gray-200 p-2 rounded-md w-full mb-3" name="description" placeholder="Description">{{ old('description') }}</textarea>
    @error('description')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <input type="number" step="0.01" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="discounted_price" placeholder="Discounted Price" value="{{ old('discounted_price') }}">
    @error('discounted_price')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <input type="number" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="stock" placeholder="Stock" value="{{ old('stock') }}">
    @error('stock')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <input type="file" class="border border-gray-200 p-2 rounded-md w-full mb-3" name="photopath">
    @error('photopath')
        <div class="text-red-500 mb-3 mt-3">{{ $message }}</div>
    @enderror

    <div class="flex justify-center mt-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Product</button>
        <a href="{{ route('products.index') }}" class="bg-red-500 text-white px-8 py-2 rounded-lg ml-2">Cancel</a>
    </div>
</form>
@endsection
