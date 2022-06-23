<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    function login() {
        
        return view('auth.login');
    }

    function login__process(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (auth("web")->attempt($data)) {

            return redirect(route('home'));
            
        };

        return redirect(route('login'))->withErrors(["loginError" => 'Пользователь не найдет, либо данные введены не правильно']);
    }

    function register() 
    {
        return view('auth.register');
    }

    function register__process(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if($user) {
            auth("web")->login($user);
        }
        return redirect(route('home'));
    }

    function logout() 
    {
        auth('web')->logout();

        return redirect(route('home'));
    }
}
