<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $token = $request->_token;
        $username = $request->user_email;
        $password = $request->password;
        $request->validate([
            'user_email' => 'required',
            'password' => 'required',
        ]);
        $credentials = [
            'user_email' => $username,
            'password' => $password,
        ];
        $checkuser = Auth::attempt($credentials);
        if ($checkuser) {
            session(['user_email' => $username, 'password' => $password, 'token' => $token]);
            return redirect()->intended('dashboard')->withSuccess('Success');
        }
        return redirect()->intended('admin')->withSuccess('Fail');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('admin');
    }
}
