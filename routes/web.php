<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// la rotta con il metodo resource() gestirĂ  tutte le rotte relative a tabella e resource controller
// visualizzata: localhost:8000/comics
Route::resource('comics', 'ComicController');
