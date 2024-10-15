<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    function  Vlogin(){
        return view('login');
    }

    function  login(Request $request){
        $validate = $request->validate([
            'email'=>['required','email'],
            'password'=>['required',]
        ]);
         if (Auth::attempt($validate)) {
            return redirect('/beranda')->with('berhasil','Selamat Login Anda Berhasil');
         }
         return redirect()->back()->with('gagal','Maaf login anda gagal');
    }
    function logout(){
        Auth::logout();
        
        return redirect('/login');
    }
}
