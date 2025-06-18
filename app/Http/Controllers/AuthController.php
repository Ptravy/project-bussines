<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilRegistrasi(){
        return view('auth.registrasi');
    }

    function submitRegistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //dd($user);
        return redirect()->route('login.tampil');
    }

     function tampilLogin(){
        return view('auth.login');
    }

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dashboard.tampil');
        }else{
            return redirect()->back()->with('gagal', 'Email atau password anda salah!');
        }
    }
}
