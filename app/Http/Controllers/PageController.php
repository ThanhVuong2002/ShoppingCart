<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
use App\Models\comments;
use App\Models\producttype;

class PageController extends Controller
{
    public function getIndex(){ 
        $slide =slide::all();
        //return view('page.trangchu',['slide'=>$slide]);
           $new_product = product::where('new',1)->get(); 
           $sanpham_khuyenmai=product::where('promotion_price','<>',0)->get();
           // dd($new_product); 
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
       }

       public function getLoaiSp($type){
        $type_product= producttype::all();
        $sp_theoloai=product::where('id_type',$type)->get();
        $sp_khac= product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham', compact('sp_theoloai', 'type_product','sp_khac'));
       }
       public function getDetail(Request $request){
        $sanpham= product::where('id', $request->id)->first();
        $splienquan= product::where('id','<>', $sanpham->id,'and','id_type','=',$sanpham->id_type,)->paginate(3);
        $comments=comments::where('id_product',$request->id)->get();
        return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));
       }
       
}
