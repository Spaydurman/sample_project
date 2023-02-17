<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'SFirstname'=> 'required',
            'SLastName'=> 'required',
            'SUsername'=> 'required',
            'SEmail'=> 'required|email',
            'SPassword' => 'required|confirmed',
            'SPassword_confirmation' => 'required'
        ]);
        
        User::create([
            'firstname' => $request->SFirstname,
            'surname' => $request->SLastName,
            'username' => $request->SUsername,
            'email' => $request->SEmail,
            'password' => Hash::make($request->SPassword),
        ]);

        return redirect()->route('dashboard');
    }
}
