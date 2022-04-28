<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\randombytes_uniform;

class RegisterController extends Controller
{
    public function getRegisterPage()
    {
        return view('registration');
    }

    public function signUp(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user_profile'));
        }

        $validateFields=$request->validate([
            'name'=>'required|min:2|max:100',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('registration_page'))->withErrors([
                'email' => 'Пользователь уже зарегистрирован'
            ]);
        }

        $user = User::create($validateFields);

        if ($user) {
            Auth::login($user);
            return redirect(route('user_profile'));

        }

    }
}
