<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Komang Listya Omi Pradnyani",
        "foto" => "images/Image1.jpg",
        "quotes" => "Life's struggle when you're a muggle and everything will be important if you realize people around you is magical"
    ]);  // Rute untuk halaman Profile
});