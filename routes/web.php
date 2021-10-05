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
    return view('home');
})->name('home');



Route::get('/comics', function () {
    $comicsList = config('comics');
    return view('comics', ['comics' => $comicsList]);
})->name('comics');



Route::get('/comic/{id}', function ($id) {
    $comics = config("comics");
    $comicDetail = $comics[$id];
    return view('comic', ['comic' => $comicDetail]);
})->name('detail');
