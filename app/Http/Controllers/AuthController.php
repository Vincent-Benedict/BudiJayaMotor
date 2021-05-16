<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authLogin(Request $request){

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->back();
        } else{
            return redirect()->back();
        }
    }

    public function authLogout(){
        Auth::logout();
        return redirect('/');
    }
}
