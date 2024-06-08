<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //


    public function login(){
        return view("Admin.login");
    }


    public function doLogin(Request $request){

        $credentials=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(!Auth::attempt($credentials)){

        }
    }
}
