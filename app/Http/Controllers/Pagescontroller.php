<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function home(){
        $name= "Pratik Shrees";
        return view('welcome',compact('name'));
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
