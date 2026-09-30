<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});


Route::get('/profile', function () {
    return view('profile', [
        "title" => "Home",
        "name" => "Hilda AS",
        "nim" => "13242520029",
        "prodi" => "Teknologi Informasi",
        "gambar" => "james.jpg"
    ]);
});


Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});