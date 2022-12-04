<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show(Request $request) {
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
}
