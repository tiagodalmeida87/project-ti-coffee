<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::query();

        $products->when($request->search, function ($query, $vl) {
            $query->where('name', 'like', '%' . $vl . '%')
                     ->orWhere('price', 'like', '%' . $vl . '%')
                     ->orWhere('description', 'like', '%' . $vl . '%');
       //     // dd($vl);
        });

        $products = $products->get();
        return view('product', [
            'products' => $products
        ]);
   }

    public function show(Product $product) 
    {

        //  $product = Product::all();
        // dd($product);

        return view('productShow', [
            'product' => $product
        ]);
    }
}
