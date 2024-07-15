<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("public/login");
    }
    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('dashboard/home')->with('success', 'Login Berhasil');
        }else{
            return redirect('sesi')->withErrors('Email atau Password Salah');
        };
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Logout Berhasil');
    }

    function register(){
        return view("public/login");
    }
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8'
        ],[
            'name.required'=> 'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'emmail.email'=> 'Email tidak valid',
            'emmail.unique'=> 'Email sudah terdaftar',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal harus 8 karakter'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make ($request->password)
        ];

        User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('dashboard/home')->with('success', Auth::user()->name . 'Login Berhasil');
        }else{
            return redirect('sesi')->withErrors('Email atau Password Salah');
        };
    }

}