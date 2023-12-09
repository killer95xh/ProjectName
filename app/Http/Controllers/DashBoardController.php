<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:login', ['except' => []]);
    }

    public function index(Request $request) {
        $checkuser = Auth::check();
//        dd($checkuser);
//        if(Auth::check()){
            $SessionAdmin = $request->session()->all();
            $data = [
                'session' => $SessionAdmin
            ];
            return view('admin.layouts.dashboard', ['data' => $data]);
//        }
//        return redirect("admin")->withSuccess('You are not allowed to access');
    }
}
