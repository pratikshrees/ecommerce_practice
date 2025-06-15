@extends('layouts.master')
@section('content')
    <div class="grid grid-col-5 gap-5 px-20 py-10">
        <div class="col-span-2">
            <img src="{{asset($product->photopath)}}" alt="" class="w-full h-96 object-cover rounded-md mb-3">
        </div>
        <div class="col-span-2 border-s-2">
            <h1 class="text-black text-xl">{{$product->name}}</h1>
        </div>
    </div>
@endsection