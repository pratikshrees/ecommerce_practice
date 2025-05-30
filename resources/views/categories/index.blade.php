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
        @foreach($categories as $category)
        <tr class="text-center">
            <th class="p-2 border border-grey-50">{{$category->order}}</th>
            <th class="p-2 border border-grey-50">{{$category->name}}</th>
            <th class="p-2 border border-grey-50">
                <a href="{{route('categories.edit',$category->id)}}" class="bg-blue-500 text-white px-2 py-1 rounded-md">Edit</a>
                <a href="{{route('categories.destroy',$category->id)}}" onclick="return confirm('Are you sure to delete ?');" class="bg-red-500 text-white px-2 py-1 rounded-md">Delete</a>
            </th>
        </tr>
        @endforeach
    </table>
@endsection