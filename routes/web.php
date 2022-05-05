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
    return view('guest.main', ['comics' => $comics, 'linkheader' => $linkheader, 'contentslink' => $contentslink,'iconslink' => $iconslink ]);
})->name('guest-home');

Route::get('/detail/{id}', function ($id) {
    $comics= config('comics');
    $linkheader= config('linkheader');
    $contentslink= config('contentslink');
    $iconslink= config('iconslink');
    if( is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('guest.detail',['comics' => $comics[$id],'linkheader' => $linkheader, 'contentslink' => $contentslink,'iconslink' => $iconslink ]);
    }else{
        abort(404);
    }
})->name('guest-detail');

Route::get('/jumbo', function () {
    return view('guest.jumbo');
})->name('guest-jumbo');
