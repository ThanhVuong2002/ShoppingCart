<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function xinChao()
    {
        return view('login');
    }

    public function Api(){
        return view('test');
    }

    public function display(Request $request)
    {

        $number1 = $request->number1;
        $number2 = $request->number2;
        $calulation = $request->caculation;

        switch ($calulation) {
            case '+':
                $result= $number1 + $number2;
                break;
            case '-':
                $result= $number1 - $number2;
                break;
            case '*':
                $result= $number1 * $number2;
                break;
            case '/':
                $result= $number1 / $number2;
                break;
            default:
               $result= "<script>alert('Vui lòng nhập phương thức tính toán')</script>";
                break;
        }
        return view('login',['result'=>$result]);

    }
}
