<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index(){
        return view('sum');
    }
    public function Summ(Request $request){
        $result = $request -> numberA + $request -> numberB;
        return view('sum', compact('result'));
    }
}
