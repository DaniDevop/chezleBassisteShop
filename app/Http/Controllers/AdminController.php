<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //


    public function login(){
        return view("Admin.login");
    }

    public function home(){
        return view('Admin.home');
    }


    public function register(){
        return view('Admin.register');
    }

    public function registerAdmin(Request $request){
        $validate=$request->validate([
        'email'=>'required|unique:users,email',
        'name'=>'required',
        'password'=>'required',
        'password_confirm'=>'required',
        'tel'=>'nullable',
         'role'=>'required'
        ]);
        

        $admin =new User();
        $admin->name=$request->name;
        $admin->password=  bcrypt($request->password);
        $admin->email=$request->email;
        $admin->role=$request->role;
       
        $imagePath='';
        if($request->hasFile('profil')){
          $imagePath=$request->file('profil')->store('users','public');
        }
        $admin->profil=$imagePath;
        $admin->tel=$request->tel ? :'';
        $admin->save();
        toastr()->error('Informations inséré avec succès !');

        return redirect()->route('home.admin');

    }


    public function doLogin(Request $request){

        $credentials=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(!Auth::attempt($credentials)){
            toastr()->error('Informations introuvable');
            return back();
        }

        return redirect()->route('home.admin');
    }
}
