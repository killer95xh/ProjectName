<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }
    public function login(Request $request) {
        $token = isset($request->_token);
        $UserName = $request->username;
        $PassWord = $request->password;
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);
        $User = User::where('user_email', $request->username)->first();
        if ($UserName == $User->user_email && $PassWord == $User->user_pass) {
            return redirect()->intended('dash-board')->withSuccess('Success');
        } else {
            return redirect()->intended('admin')->withSuccess('Fail');
        }
    }
}
