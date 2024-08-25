<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('index');
});

// all jobs
Route::get('/jobs', function ()
 {
    $jobs=job::with('employer')->latest()->simplePaginate(3);
    return View('jobs.index',[
        'jobs'=> $jobs
    ]);
});

// create job
Route::get('/jobs/create', function(){
   return view('jobs.create');
 });

 // show job
Route::get('/jobs/{id}', function ($id)  {
  $job = job::findorFail($id);

    return view('jobs.show',['job'=> $job]);
});

// store job
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

// edit job
Route::get('/jobs/{id}/edit', function ($id)  {
    $job = job::find($id);

      return view('jobs.edit',['job'=> $job]);
  });

// update
Route::patch('/jobs/{id}', function ($id)  {
     // validation
     request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
      ]);
     // authorize

     // update
    $job = Job::findorFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
     // redirect
      return redirect('/jobs/' . $job->id);
  });


  // Destroy
Route::delete('/jobs/{id}', function ($id)  {
     job::findorFail($id)->delete();

      return redirect('/jobs');
  });
Route::get('/contact', function () {
    return view('contact');

});
