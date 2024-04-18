<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'Вы вошли в систему!');
        }

        error_log('Failed');
        return back()->withErrors(['email' => 'Неправильный логин или пароль'])->onlyInput('email');
    }
}
