<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/teste/{nome}/{sobre}', function($x,$y){

//     return 'Olá ' . $x . ' ' . $y;

// });

Route::resource('filmes', 'FilmeController');
Route::resource('generos', 'GeneroController');
Route::resource('atores', 'AtorController');





