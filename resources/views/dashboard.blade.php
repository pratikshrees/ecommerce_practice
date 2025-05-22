@extends('layouts.app')
@section('title','Dashboard')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-blue-100 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
                <i class="ri-user-line"></i>
                Total User
            </h3>
            <p class="text-4xl text-right font-bold ">55</p>
        </div>
        <div class="bg-green-100 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
                <i class="ri-shopping-cart-line"></i>
                Total Orders
            </h3>
            <p class="text-4xl text-right font-bold ">1000</p>
        </div>
        <div class="bg-pink-200 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
                <i class="ri-money-rupee-circle-line"></i>
                Total revenue
            </h3>
            <p class="text-4xl text-right font-bold ">1,00,000</p>
        </div>
        <div class="bg-red-200 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
               <i class="ri-menu-line"></i>
                Total categories
            </h3>
            <p class="text-4xl text-right font-bold ">10</p>
        </div>
        <div class="bg-cyan-100 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
                <i class="ri-shopping-cart-fill"></i>
                Total Products  
            </h3>
            <p class="text-4xl text-right font-bold ">80</p>
        </div>
        <div class="bg-yellow-100 p-4  shadow-md rounded-lg">
            <h3 class="font-bold text-lg">
                <i class="ri-loader-2-line"></i>
                Pending orders
            </h3>
            <p class="text-4xl text-right font-bold ">7</p>
        </div>
    </div>
@endsection

