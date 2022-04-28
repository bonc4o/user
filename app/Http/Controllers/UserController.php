<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUserProfile() {

        if (!Auth::check()) {
            return redirect(route('login_page'));
        }

            return view('user.user_profile');


    }
}
