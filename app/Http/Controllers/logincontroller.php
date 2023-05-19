<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin() {
        return view('layouts.login');
    }

    public function doLogin(Request $request) {
        $validated = $request->validate([
            "username" => "required",
            "password" => "required|min:5",
        ]);

        $username = $request->input("username");
        $request->session()->put("username", $username);

        return redirect('todos');
    }

    public function doLogout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}