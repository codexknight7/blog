<?php

namespace App\Http\Controllers;


use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(){

        // validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // create and save user
        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));

        $user = User::create([
            'name' => $name, 
            'email' => $email, 
            'password' =>$password
        ]);

        // sign in the user
        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

        // put the Thanks message for signing up into session, 
        // just to   show it on the next page, then it will be removed from session
        session()->flash('message', 'Thanks so much for signing up');


        // redirect to home page
        return redirect()->home();

    }
}
