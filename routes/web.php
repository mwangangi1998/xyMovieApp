<?php

use Illuminate\Support\Facades\Route;


// landing page
Route::view('/', 'index');
Route::view('/movies', 'pages.movies');
Route::view('/tvshows', 'pages.tvshow');
Route::view('/actors', 'pages.actors');
