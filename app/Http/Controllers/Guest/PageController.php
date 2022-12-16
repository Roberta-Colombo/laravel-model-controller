<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //funzione controller per homepage
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}