<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SampleMail;

class SendMailController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'Mail tư vấn oceanlink',
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
        ];

        Mail::to('dannc@vnptepay.com.vn')->send(new SampleMail($content));

        return response()->json([
            'status' => 'success'
        ], 200);
    }
}
