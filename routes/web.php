<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;


// landing page
Route::get('/', [pagesController::class,'index']);

Route::get('/movies',[pagesController::class,'movies']);
Route::get('/tvshows',[pagesController::class,'tvshows']);
Route::get('/actors',[pagesController::class,'actors']);
Route::get('/movie_show',[pagesController::class,'show']);

