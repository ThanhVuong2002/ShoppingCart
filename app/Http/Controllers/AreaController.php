<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        return view('Area');
    }
    public function Area(Request $request){
        $a = $request -> a;
        $h = $request -> h;
        $e1 = $request -> e1;
        $e2 = $request -> e2;
        $e3 = $request -> e3;
        $e4 = $request -> e4;
        return view('Area') ->with(['resulAreaofTriangle' => ($a+$h)/2,'resulAreaofQuadrangle' => ($e1+$e2+$e3+$e4)]);

    }
}
