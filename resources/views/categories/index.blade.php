@extends('layouts.app')
@section('title', 'categories')
@section('content')
    <div class="flex justify-end">
        <a href="{{route('categories.create')}}" class="bg-blue-600 text-white px-4 py-2">Add Categories</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-grey-50 ">Order</th>
            <th class="p-2 border border-grey-50 ">Categories Name</th>
            <th class="p-2 border border-grey-50 ">Action</th>
        </tr>
        <tr class="text-center">
            <th class="p-2 border border-grey-50">1</th>
            <th class="p-2 border border-grey-50">Category 1</th>
            <th class="p-2 border border-grey-50">
                <a href="" class="bg-blue-500 text-white px-2 py-1 rounded-md">Edit</a>
                <a href=""  class="bg-red-500 text-white px-2 py-1 rounded-md">Delete</a>
            </th>
        </tr>
    </table>
@endsection