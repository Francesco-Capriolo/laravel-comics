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
    $comics= config('comics');
    $linkheader= config('linkheader');
    $contentslink= config('contentslink');
    $iconslink= config('iconslink');
    return view('layouts.app', ['comics' => $comics, 'linkheader' => $linkheader, 'contentslink' => $contentslink,'iconslink' => $iconslink ]);
});

Route::get('/home', function () {
    $comics= config('comics');
    $linkheader= config('linkheader');
    $contentslink= config('contentslink');
    $iconslink= config('iconslink');
    return view('guest.main', ['comics' => $comics, 'linkheader' => $linkheader, 'contentslink' => $contentslink,'iconslink' => $iconslink ]);
})->name('guest-home');
