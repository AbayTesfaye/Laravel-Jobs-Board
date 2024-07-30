<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('index');
});


Route::get('/jobs', function () {
    return View('jobs',[
        'jobs'=>[
            [
                 'id'=>1,
                 'title'=>'Director',
                 'salary'=> '$40'
            ],
            [
                'id'=>2,
                'title'=>'Programmer',
                'salary'=> '$50'
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=> '$30'
           ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
//    dd($id);
   $jobs= [
            [
                 'id'=>1,
                 'title'=>'Director',
                 'salary'=> '$40'
            ],
            [
                'id'=>2,
                'title'=>'Programmer',
                'salary'=> '$50'
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=> '$30'
           ]
            ];
  $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job',['job'=> $job]);


});

Route::get('/contact', function () {
    return view('contact');

});
