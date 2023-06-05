<?php

namespace App\Http\Controllers;

use App\services\mailchimp;

class MailchimpController extends Controller
{
    public function store(){

        try{
     
         (new mailchimp())->addToNewsletter(request('email'));
     
        }
     
         catch(\Exception $e){
             \Illuminate\Validation\ValidationException::withMessages([
                 'email'=>'this email conld not be added to our newsletter list'
             ]);
         }
         
         session()->flash('success', 'you have successfully subscribed to our newsletter');
     
        return redirect('/');
         }
}
