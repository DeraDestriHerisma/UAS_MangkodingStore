<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginProses(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/produk');
        }
        return redirect('login');
    }
    
    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('beranda')->with('Success','Anda telah logout Account');
    }
}
