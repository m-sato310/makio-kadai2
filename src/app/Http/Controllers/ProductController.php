<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Season;

use function GuzzleHttp\Promise\all;

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
        // dump($productId);
        $seasons = Season::all();
        return view('show', compact('product', 'seasons'));
    }

    public function showRegister()
    {
        $seasons = Season::all();
        return view('register', compact('seasons'));
    }

    public function register(ProductRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        dump($data);
        $data['image'] = $request->image->store('fruits-img', 'public');
        dump($data);
        $product = Product::create($data);
        $product->seasons()->sync($data['season_id']);
        return redirect('/products');
    }

    public function update(ProductRequest $request)
    {
        // dd($request);
        $product = $request->only(['name', 'price', 'season_id', 'description', 'image']);
        $product['image'] = $request->image->store('fruits-img', 'public');
        Product::find($request->id)->update($product);

        return redirect('/products');
    }
}
