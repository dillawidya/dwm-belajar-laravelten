<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index')->with([
            'products' => Products::all()
        ]);
    }

    public function store(StoreProductsRequest $request)
    {
        $validate = $request->validated();

        $products = new Products;
        $products->name = $request->name;
        $products->category_id = $request->category_id;
        $products->product_code = $request->product_code;
        $products->price = $request->price;
        $products->unit = $request->unit;
        $products->stock = $request->stock;
        $products->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $products->image = 'images/' . $fileName; // menyimpan path gambar ke database
        }
        $products->save();

        return redirect('products')->with('msg', 'Data Berhasil Ditambahkan');
    }

    public function show(Products $products, $id)
    {
        $data = $products->find($id);
        return view('products.edit')->with([
            'id' => $data->id,
            'name' => $data->name,
            'category_id' => $data->category_id,
            'product_code' => $data->product_code,
            'price' => $data->price,
            'unit' => $data->unit,
            'stock' => $data->stock,
            'description' => $data->description,
        ]);
    }

    public function update(UpdateProductsRequest $request, Products $products, $id)
    {
        $data = $products->find($id);
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->product_code = $request->product_code;
        $data->price = $request->price;
        $data->unit = $request->unit;
        $data->stock = $request->stock;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $product->image = 'images/' . $fileName; // menyimpan path gambar ke database
        }
        $data->save();

        return redirect('products')->with('msg', 'Data Berhasil Diubah');
    }

    public function destroy(Products $products, $product_id)
    {
        $data = $products->find($product_id);
        $data->delete();

        return redirect('products')->with('msg', 'Data Berhasil Dihapus');
    }

    public function chart()
    {
        $products = Products::select(DB::raw('count(*) as user_count'), 'category_id')->with('category')->groupBy('category_id')->get();
        return view('products.products-grafis',compact('products'));
    }

    public function chartprice()
    {
        $products = Products::select('price', DB::raw('count(*) as total'))->groupBy('price')->get();
        return view('products.price-chart', compact('products'));
    }

    public function chartstock()
    {
        $products = Products::select('stock', DB::raw('count(*) as total'))->groupBy('stock')->get();
        return view('products.stock-chart', compact('products'));
    }
    
}
