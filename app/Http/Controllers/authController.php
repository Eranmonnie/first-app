<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function create(){
        return view('auth.create');
    }
    public function store (){
      $attribius = request()->validate([
            'username'=>'required',
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required'],

        ]);
        
        User::create($attribius);

        return redirect('/');
    }

}
