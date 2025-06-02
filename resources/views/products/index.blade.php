@extends('layouts.app')
@section('title','Products')
@section('content')
    <div class="flex justify-end">
        <a href="{{route('products.create')}}" class="bg-blue-600 text-white px-4 py-2">Add Products</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-grey-50 ">Photopath</th>
            <th class="p-2 border border-grey-50 ">Name</th>
            <th class="p-2 border border-grey-50 ">Price</th>
            <th class="p-2 border border-grey-50 ">Discounted_price</th>
            <th class="p-2 border border-grey-50 ">Description</th>
            <th class="p-2 border border-grey-50 ">Stock</th>
            <th class="p-2 border border-grey-50 ">Category_id</th>
            <th class="p-2 border border-grey-50 ">Action</th>
        </tr>
       @foreach($products as $product)
        <tr class="text-center">
            <th class="p-2 border border-grey-50">{{$product->photopath}}</th>
            <th class="p-2 border border-grey-50">{{$product->name}}</th>
            <th class="p-2 border border-grey-50">{{$product->price}}</th>
            <th class="p-2 border border-grey-50">{{$product->discounted_price}}</th>
            <th class="p-2 border border-grey-50">{{$product->description}}</th>
            <th class="p-2 border border-grey-50">{{$product->stock}}</th>
            <th class="p-2 border border-grey-50">{{$product->category_id}}</th>
            <th class="p-2 border border-grey-50">
                <a href="{{route('products.edit', $product->id)}}" class="bg-blue-500 text-white px-2 py-1 rounded-md">Edit</a>
                <a href="{{route('products.destroy', $product->id)}}" onclick="return confirm('Are you sure to delete ?');" class="bg-red-500 text-white px-2 py-1 rounded-md">Delete</a>
            </th>
        </tr>
        @endforeach
    </table>
@endsection