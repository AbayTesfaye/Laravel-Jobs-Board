<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    public function index(){
        $jobs=job::with('employer')->latest()->simplePaginate(3);
        return View('jobs.index',[
            'jobs'=> $jobs
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show',['job'=> $job]);
    }

    public function store(){
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
    }

    public function edit(Job $job){

        if(Auth::guest()){
            return redirect('/login');
        }

       Gate::authorize('edit-job', $job);
      return view('jobs.edit',['job'=> $job]);
    }

    public function update(Job $job){
         // validation
     request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
      ]);
     // authorize

     // update
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
     // redirect
      return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
