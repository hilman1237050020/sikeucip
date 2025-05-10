<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('login'); // Mengarah ke view di root views
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Di isi',
            'password.required' => 'Password Wajib Di isi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'administrator') {
                return redirect('admin/administrator');
            } elseif (Auth::user()->role == 'bendaharaop') {
                return redirect('admin/bendaharaop');
            } elseif (Auth::user()->role == 'bendaharadapur') {
                return redirect('admin/bendaharadapur');
            } elseif (Auth::user()->role == 'pengurus') {
                return redirect('admin/pengurus');
            } elseif (Auth::user()->role == 'orangtua') {
                return redirect('admin/orangtua');
            } elseif (Auth::user()->role == 'pimpinanpesantren') {
                return redirect('admin/pimpinanpesantren');
            }
        } else {
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
