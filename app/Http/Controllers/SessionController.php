<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){

        return view('auth.login');
       }
       public function store(){
          // validate
         $attributes = request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
          ]);

          // attempt to login
          if( ! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=> 'Sorry, those credentails does not match'
            ]);
          }

          // generate session token
          request()->session()->regenerate();

          // redirect
          return redirect('/jobs');

       }

       public function destroy()
       {
          Auth::logout();
          return redirect('/');
       }
}
