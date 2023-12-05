<?php

namespace App\Http\Controllers\API;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json([
            'status' => 'success',
            'massage' => 'data ditemukan',
            'data' => $products
        ]);
    }

    public function show($id)
    {
        $products = Products::find($id);
        if ($products) {
            return response()->json([
                'status' => 'success',
                'massage' => 'data ditemukan',
                'data' => $products
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'massage' => 'data tidak ditemukan',
                'data' => null
            ],404);
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
        'name' => 'required',
        'category_id' => 'required',
        'product_code' => 'required',
        'price' => 'required',
        'unit' => 'required',
        'stock' => 'required',
        'description' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'massage' => 'data tidak valid',
                'data' => $validate->errors()
            ],422);
        }
        
        $products = Products::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'product_code' => $request->product_code,
        'price' => $request->price,
        'unit' => $request->unit,
        'stock' => $request->stock,
        'description' => $request->description
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'data telah dibuat',
            'data' => $products
        ]);
    }

    public function update(Request $request, $id){
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'category_id' => 'required',
            'product_code' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'stock' => 'required',
            'description' => 'required'
            ]);
            if ($validate->fails()) {
                return response()->json([
                    'status' => 'error',
                    'massage' => 'data tidak valid',
                    'data' => $validate->errors()
                ],422);
            }
        $products = Products::where('id', $id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'product_code' => $request->product_code,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'description' => $request->description
        ]);
        if ($products) {
            $products = Products::find($id);
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil diupdate',
                'data' => $products
            ]);
        }
    }

    public function destroy($id){
        $products = Products::find($id);
        if (!$products) {
            return response()->json([
            'status' => 'error',
            'mesaage' => 'data tidak ditemukan',
            'data' => null
            ],422);
        }
        $products->delete();
        return response()->json([
            'status' => 'success',
            'mesaage' => 'data berhasil dihapus',
            'data' => null
        ]); 
    }
}
