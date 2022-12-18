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
        $bestRated = Movie::where('vote', '>=', 8.5)
            ->limit(5)->get();
        return view('home', compact('bestRated'));
    }


    //funzione controller per pagina catalogue
    public function getMovies()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('pages.catalogue', compact('movies'));
    }
}