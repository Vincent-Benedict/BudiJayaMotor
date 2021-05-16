<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::get();
        return view('all_user')->with('user', $user);
    }

    public function delete($id){
        User::where('id', '=', $id)->delete();

        return redirect()->back();
    }
}
