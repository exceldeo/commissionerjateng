<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function auth(request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('home');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

}
