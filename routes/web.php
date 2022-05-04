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
    dump($contentslink);
    return view('guest.app', ['comics' => $comics], ['linkheader' => $linkheader], ['contentslink' => $contentslink]);
});
