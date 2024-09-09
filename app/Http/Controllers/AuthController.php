<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    function index(){
        return view('admin.login.login');
    }

    function login(Request $request){
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email Wajib Diisi',
                'password.required' => 'Password Wajib Diisi'
            ]
            );

    $infoLogin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($infoLogin)) {
        return redirect('kategori');
    } else {
        return redirect('/login')->withErrors('Username dan Password yang dimasukkan salah')->withInput();
    }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
