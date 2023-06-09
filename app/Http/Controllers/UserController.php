<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // public function getIndex()
    // {
    //     $name = "Phan Thanh Vuong";
    //     $age = "21";
    //     $class = "PNV";
    //     $arr = ['name' => $name, 'age' => $age, 'class' => $class];
    //     return view('test')->with('hocsinh', $arr);
    // }

    public function Register(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        $input['password'] = bcrypt($input['password']);

        User::create($input);

        return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            Session::put('user', $user);
            return redirect()->route('trangchu')->with('success', 'Đăng nhập thành công.');
        } else {
            return redirect()->route('login')->with('error', 'Đăng nhập thất bại.');
        }
    }

   // ...

public function logout()
{
    Session::forget('user');
    Session::forget('cart');
    return redirect()->route('trangchu');
}

public function showLoginForm()
{
    return view('users.login');
}
}
