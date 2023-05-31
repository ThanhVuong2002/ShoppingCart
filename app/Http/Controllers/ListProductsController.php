<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductsController extends Controller
{

    public function showAddForm(){
        return view('listproducts');
    }
   public function creatSession(Request $request){
        $titleProducts=$request->name;
        $priceProducts=$request->price;
        $typeProducts=$request->select;
        $imageProducts=$request->image;

        $product=[
            'title'=>$titleProducts,
            'type'=>$typeProducts,
            'price'=>$priceProducts,
            'image'=>$imageProducts
        ];

        // lấy danh sách sản phẩm từ session nếu đã tồn tại

        $products=session()->get('products',[]);

        // Thêm sản phẩm vào danh sách
        $products[]=$product;

        // Lưu sản phẩm vào session
        session()->put('products',$products);

        return redirect()->route('showproducts');
   }

   public function showProduct(){
    $products=session()->get('products',[]);

    return view('showproduct',['products'=>$products]);
   }
}
