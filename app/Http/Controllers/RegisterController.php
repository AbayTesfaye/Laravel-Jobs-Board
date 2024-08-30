<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{
    public function create(){

     return view('auth.register');
    }
    public function store(){
        // validate
      $attributes = request()->validate([
        'first_name'=>['required'],
        'last_name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required','min:5','confirmed']
      ]);
      $attributes['password'] = Hash::make($attributes['password']);
      // create user in db
      $user = User::create($attributes);

      //  login the user
      Auth::login($user);

      // redirect
      return redirect('/jobs');
    }
}
