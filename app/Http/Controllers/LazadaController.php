<?php

namespace App\Http\Controllers;

use App\Models\T_lazada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LazadaController extends Controller
{
    public function getProducts()
    {
        $products = T_lazada::all();
        return response()->json($products);
    }

    public function getOneProduct($id)
    {
        $product = T_lazada::find($id);
        return response()->json($product);
    }

    public function addProduct(Request $request)
    {
        $product = new T_lazada();
        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->shopowner = $request->input('shopowner');
        $product->save();

        return response()->json($product);
    }

    public function deleteProduct($id)
    {
        $product = T_lazada::find($id);
        $fileName = 'source/image/product/' . $product->image;

        if (File::exists($fileName)) {
            File::delete($fileName);
        }

        $product->delete();
        return response()->json(['status' => 'ok', 'msg' => 'Delete successed']);
    }

    public function editProduct(Request $request, $id)
    {
        $product = T_lazada::find($id);
        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->shopowner = $request->input('shopowner');
        $product->save();

        return response()->json(['status' => 'ok', 'msg' => 'Edit successed']);
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);

            return response()->json(["message" => "ok"]);
        } else {
            return response()->json(["message" => "false"]);
        }
    }
}
