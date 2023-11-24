<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        if(Auth::check()){
        $products = Product::simplePaginate(5);
        return view('products.index', compact('products', $products));
        }
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $product = request()->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $product = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/')->with('success', 'Product successfully stored.');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product', $product));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product', $product));
    }
    public function update(Request $request, $id)
    {
        $product = request()->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/')->with('success', 'Product successfully updated.');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/')->with('success', 'Product successfully deleted.');
    }
}
