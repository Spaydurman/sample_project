<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function index() {

        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request, [
            'username'=> 'required',
            'password' => 'required',
        ]);
        // auth()-> attempt($request->only ('username','password'));
        if(!auth()-> attempt($request->only('username','password'))){
            return back() -> with('status', 'Invalid login details'); 
        }
        
        return redirect()->route('dashboard');


    }
}
