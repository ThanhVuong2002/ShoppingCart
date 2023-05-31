<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function validation(Request $request)
    {
        $validation = [
            "fullname" => $request->fullname,
            "email" => $request->email,
            "phone" => $request->phone,
            "pass" => $request->pass,
            "confirmpass" => $request->confirmpass
        ];

        return view('welcome', ['validation' => $validation]);
    }
}

