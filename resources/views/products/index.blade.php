@extends('layouts.app')
@section('title','Products')
@section('content')
    <div class="flex justify-end">
        <a href="{{route('products.create')}}" class="bg-blue-600 text-white px-4 py-2">Add Products</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-grey-50 ">Name</th>
            <th class="p-2 border border-grey-50 ">Price</th>
            <th class="p-2 border border-grey-50 ">Description</th>
            <th class="p-2 border border-grey-50 ">Discounted_price</th>
            <th class="p-2 border border-grey-50 ">Stock</th>
            <th class="p-2 border border-grey-50 ">Category_id</th>
            <th class="p-2 border border-grey-50 ">Photopath</th>
            <th class="p-2 border border-grey-50 ">Action</th>
        </tr>
       
    </table>
@endsection