<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');

    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return redirect('posts');
        } else {
            return redirect('login')->with('error_message', 'Email atau password salah');
        }
    }

    public function logout()
    {

        Session::flush();
        Auth::logout();

        return redirect('login')->with('error_msg', 'Anda sudah logout, silahkan login kembali');

    }

    public function register_form()
    {

        return view('auth.register');

    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'min:3|max:10',
            'email' => 'email|unique:users',
            'password' => 'min:4|max:6|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);


    }


}