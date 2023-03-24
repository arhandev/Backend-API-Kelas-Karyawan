<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use stdClass;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::whereNotNull('user_id')->with('user')->latest()->get();
            return response()->json([
                "info" => "Berhasil Mengambil Data Product",
                "data" => $products
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function show(Request $request, Product $product)
    {
        try {
            return response()->json([
                "info" => "Berhasil Mengambil Detail Produk",
                "data" => $product->load('user')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function store(StoreProductRequest $request)
    {
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->harga = $request->harga;
            $product->stock = $request->stock;
            $product->description = $request->description;
            $product->image_url = $request->image_url;
            $product->category = $request->category;
            $product->is_diskon = $request->is_diskon;
            $product->user_id = auth()->user()->id;

            if ($request->is_diskon) {
                $product->harga_diskon = $request->harga_diskon;
            }

            $product->save();

            return response()->json([
                "info" => "Berhasil Membuat Product",
                "data" => $product
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        try {
            $product->name = $request->name;
            $product->harga = $request->harga;
            $product->stock = $request->stock;
            $product->description = $request->description;
            $product->image_url = $request->image_url;
            $product->category = $request->category;
            $product->is_diskon = $request->is_diskon;
            if ($request->is_diskon) {
                $product->harga_diskon = $request->harga_diskon;
            } else {
                $product->harga_diskon = 0;
            }
            $product->save();

            return response()->json([
                "info" => "Berhasil Mengubah Product",
                "data" => $product
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function delete(Request $request, Product $product)
    {
        try {
            $product->delete();

            return response()->json([
                "info" => "Berhasil Menghapus Product",
                "data" => $product
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }
}
