<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::guard('kasir')->attempt([
                                     'nik' => $request->nik,
                                     'password' => $request->password,]))
        {
            dd('berhasil: '.Auth::guard('kasir')->user()->name);
            Log::info("login successful");
            // return redirect()->route('kasir.dashboard');
        }
        else{
            echo "login gagal";
            // return redirect('/user)->with('warning', 'NIS / PASSWORD SALAH!');
        }

    }
public function logoutkasir()
{
    if(Auth::guard('kasir')->check()){
    Auth::guard('kasir')->logout();
    return redirect('/');
    }
}

}
