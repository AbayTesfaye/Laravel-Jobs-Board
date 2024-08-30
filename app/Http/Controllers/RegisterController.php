<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){

     return view('auth.register');
    }
    public function store(){
        dd(request()->all());
    }
}
