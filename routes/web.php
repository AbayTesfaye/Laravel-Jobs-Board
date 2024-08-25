<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('index');
});


Route::get('/jobs', function ()
 {
    $jobs=job::with('employer')->latest()->simplePaginate(3);
    return View('jobs.index',[
        'jobs'=> $jobs
    ]);
});

Route::get('/jobs/create', function(){
   return view('jobs.create');
 });

Route::get('/jobs/{id}', function ($id)  {
  $job = job::find($id);

    return view('jobs.show',['job'=> $job]);
});

Route::post('/jobs', function(){
  // validation
  request()->validate([
    'title'=>['required','min:3'],
    'salary'=>['required']
  ]);

  Job::create([
    'title'=>request('title'),
    'salary' => request('salary'),
    'employer_id'=>1,
  ]);

  return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');

});
