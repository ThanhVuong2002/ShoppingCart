<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     $title = "Đây là tiêu đề ";
    //     $description = "Đây là dòng mô tả ";
    //     $copyright = "Học web chuẩn ";
    //     return view ('test') ->with (['title'=>$title,'description'=>$description,'copyright'=>$copyright]);
    // }
    public function getIndex(){
        $name = "Cao Tuyen ";
        $age = "21 ";
        $class = "PNV ";
        $arr = ['name' => $name, 'age' => $age, 'class' => $class];
        return view ('test') ->with ('hocsinh',$arr);
    }
}

