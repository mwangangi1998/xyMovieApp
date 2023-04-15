<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class pagesController extends Controller
{


    //
    public function index()
    {
        // :withToken(config('services.tmdb.token'))

        $popularmovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/550?api_key=d93b05f4cf753793bf809623e1d0127e')
            ->json( ) ;
        dump($popularmovies);
        return view('index', ['popularmovies'=>$popularmovies]);
    }
    public function movies()
    {
        return view('pages.movies');
    }
    public function actors()
    {
        return view('pages.actors');
    }
    public function tvshows()
    {
        return view('pages.tvshow');
    }
    public function show()
    {
        return view('pages.show');
    }
}
