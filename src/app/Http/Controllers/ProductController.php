<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6);
        return view('index', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $items = Product::where('name', 'LIKE',"%{$request->input('product-search')}%")->get();
        return view('search', ['items' => $items]);
    }

    public function show($productId)
    {
        $product = Product::find($productId);
        dump($productId);
        return view('show', compact('product'));
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        Product::create($request->all());
        return redirect('/products');
    }
}
