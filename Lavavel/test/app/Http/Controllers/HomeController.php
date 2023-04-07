<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // view
    public function index(){
        return view('index');
      }
   public function about(){
     return view('about');
   }
   public function menu(){
     return view('menu');
   }
   public function book(){
     return view('book');
   }
}