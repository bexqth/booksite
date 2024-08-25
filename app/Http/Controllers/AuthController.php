<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    //function for login and registration

    function login() {
        //return view for login
        return view('login');
    }

    function loginPost(Request $request) {
        //handles request which hanles the data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('homeRoute'));
        }
    
        return redirect(route('loginRoute'))->with("error", "Login details are not valid");
    }

    function register() {
        return view('register');
    }

    function registerPost(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user) {
            return redirect(route('registerRoute'))->with("error", "registration did no go thro");
        } else {
            return redirect(route('loginRoute'))->with("success", "registration is completed");
        }
    }

}
