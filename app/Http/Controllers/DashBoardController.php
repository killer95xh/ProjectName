<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;

class DashBoardController extends Controller
{

    public function index() {
        $data = [
            'name' => 1,
            'phone' => 2,
        ];
        return view('admin.layouts.dashboard', ['data' => $data]);
    }

    public function ConectDB() {
        $id = '127';
        $finanDiscount = DB::table('users')->where('user_id', '=', $id)->first();
        dd($finanDiscount);
    }
}
