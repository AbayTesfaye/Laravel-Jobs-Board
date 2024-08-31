<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Route;
use App\Models\job;
use Illuminate\Support\Facades\Mail;

Route::get('test',function(){
    Mail::to('abaytesfaye@gmail.com')->send(new JobPosted());
    return 'done!';
});

Route::view('/','home');
Route::view('/contact','contact');

    Route::controller(JobController::class)->group(function(){
    Route::get('/jobs','index');
    Route::get('/jobs/create','create');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}','show');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit','job');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// Route::resource('/jobs',JobController::class);
Route::get('/register',[RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);


