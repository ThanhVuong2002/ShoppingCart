<?php
namespace App\Http\Controllers;

use App\Models\T_lazada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LazadaController extends Controller
{
    public function getProducts(Request $request)
    {
        $search = $request->query('search');
    
        $products = T_lazada::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();
    
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

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);

            return response()->json(["message" => "ok"]);
        } else {
            return response()->json(["message" => "false"]);
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $product = T_lazada::find($id);
        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

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
        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

        $product->delete();

        return response()->json(["message" => "Product deleted"]);
    }
}
