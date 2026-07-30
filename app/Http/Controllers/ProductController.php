<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $trashCount = Product::onlyTrashed()->count();
        return view('products.index', compact('products', 'trashCount'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('products.trash', compact('products'));
    }

    public function restore($id)
    {
        $Products = Product::onlyTrashed()->findOrFail($id);
        $Products->restore();

        return redirect()->route('products.trash')->with('success', 'Product restored successfully.');
    }

    public function forceDelete($id)
    {
        $Products = Product::onlyTrashed()->findOrFail($id);
        $Products->forceDelete();

        return redirect()->route('products.trash')->with('success', 'Product permanently deleted.');
    }
}
