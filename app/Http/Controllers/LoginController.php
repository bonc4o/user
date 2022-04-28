<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        dd($request);

    }

    public function logout()
    {

        Auth::logout();

        return redirect(route('login_page'));


    }
}
