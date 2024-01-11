<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect('home');
        }
        return redirect()->back();

        // if(Auth::attempt($credentials)){
        //     if(Auth::user()->level == 'admin'){
        //         return redirect('home');
        //     }else{
        //         return redirect('operator');
        //     }
        // }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
