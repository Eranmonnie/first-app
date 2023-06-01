<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        session()->flash('success', 'Goodbye');
        return redirect("/");
    }
}
