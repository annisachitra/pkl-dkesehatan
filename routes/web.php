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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('berita',function(){
    return view('berita.index');
})->name('berita');
Route::get('content',function(){
    return view('berita.content');
})->name('content');
Route::get('artikel',function(){
    return view('artikel.index');
})->name('artikel');
Route::get('contentt',function(){
    return view('artikel.content');
})->name('contentt');
Route::get('galeri',function(){
    return view('galeri.index');
})->name('galeri');
Route::get('tentang',function(){
    return view('profil.tentang');
})->name('tentang');
Route::get('visimisi',function(){
    return view('profil.visimisi');
})->name('visimisi');
Route::get('kontak',function(){
    return view('kontak.index');
})->name('kontak');
