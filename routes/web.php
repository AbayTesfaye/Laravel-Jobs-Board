<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('index');
});


Route::get('/jobs', function () {
    return View('jobs',[
        'jobs'=>[
                 'title'=>'Director',
                 'salary'=> '$40'
                ],
                [
                 'title'=>'Programmer',
                 'salary'=> '$50'
                ],
                 [
                 'title'=>'Teacher',
                 'salary'=> '$150'
                ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');

});
