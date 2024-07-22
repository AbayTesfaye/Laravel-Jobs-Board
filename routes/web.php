<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('index',['greeting'=>'Hello','name'=>'Abay']);
});


Route::get('/about', function () {
    return View('about');
});

Route::get('/contact', function () {
    return view('contact');

});
