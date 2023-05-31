<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class authController extends Controller
{
    public function create(){
        return view('auth.create');
    }
    public function store (){
      $attributes = request()->validate([
            'username'=>['required','max:255',  Rule::unique('users','username')],
            'name'=>['required' ,'min:3', 'max:255'],
            'email'=>['required','email', 'max:255', Rule::unique('users','email')],
            'password'=>['required', 'min:7', 'max:255'],

        ]);

        User::create($attributes);
        session()->flash('success', 'you have been registered in successfully');

        return redirect('/');//we could use with('success', 'bla bla bla')
    }

}
