<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            if (Auth::user()->role == 'user') {
                return redirect('/');
            }
            return redirect('/admin/dashboard');

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
