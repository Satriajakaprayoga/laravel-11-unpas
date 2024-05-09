<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserStatic;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "user" => "Satria Jaka Prayoga",
        "email" => "satriajaka31@gmail.com",
        "image" => "satria.jpg",
        "datas" => UserStatic::all(),

    ]);

});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        
    ]);
});

Route::get('/about/{email}', function ($email) {
    return view('listEmail', [
        "title" => "List email",
        "data" => UserStatic::find($email)
        
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});

