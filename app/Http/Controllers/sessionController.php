<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        session()->flash('success', 'Goodbye');
        return redirect("/");
    }
    public function create(){
        return view("sessions.create");
    }
    public function store(){
        //validate 
        $user = request()->validate([
            'email'=>['required','email'],
            'password'=>['required', 'min:7', 'max:255'],

        ]);
        //get user from db with email 
        //verify password
        //if true send user instance to the auth::login()function 
        if (auth()->attempt($user)){
            session()->regenerate();
            session()->flash('success', 'Welcome back');
            return redirect("/");
        }
        else{
            return back()
                ->withInput()
                ->withErrors([
                    'email'=>'the provided credentials could not be verefied'
                ]);

                //we could do this also 
                // throw ValidationException::withMessages([
                //     'email'=>'the provieded credentials could not be verified'
                // ])
        }

    }
}
