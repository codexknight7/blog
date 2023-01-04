<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct(){
        // only no authenticated users (guests)
        // have access to this page
        $this->middleware('guest',['except' => 'destroy']);
    }
    public function create(){

        return view('sessions.create');
    }

    public function store(){

        $isAuthenticated = auth()->attempt(request([
            'email',
            'password'
        ]));

       
        if($isAuthenticated){
            return redirect()->home();
        }

        return back()->withErrors([
            'message' => 'Please check your credentials and try again.'
        ]);
    }


    public function destroy(){
        auth()->logout();

        redirect()->home();
    }


}
