<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function home(){
        $latestproduct= Product::latest()->take(4)->get();
        return view('welcome',compact('latestproduct'));
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }
}
