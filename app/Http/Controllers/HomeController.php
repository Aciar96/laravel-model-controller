<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
   public function index(){
    $movie = Movie::all();
    dd($movie);
    return view('comicx', compact('movie')) ;
   }
}
