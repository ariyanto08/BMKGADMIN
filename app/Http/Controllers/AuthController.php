<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function loginproses()
    {

        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('data_manager/admin/pegawai')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal');
        }

    }
    function logout(){
        Auth::logout();
        return redirect('login')->with('warning', 'Anda Telah Logout!');
    }
}
