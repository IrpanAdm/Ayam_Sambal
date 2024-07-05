<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\storage;
class ProductController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('product.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                
                'product_product' => 'required',
                'price_product' => 'required|integer',
                'stock_product' => 'required',
                'suplayer_product' => 'required',
                'foto_product' => 'mimes:jpg,png,gif,jpeg|image|max:5049',
                'status_product' => 'required',
            ],
          
        );

        $path=$request->file('foto_product')->store('public/uploads');

        $product = new product();
        $product->nama_produk = $request[ 'product_product'];
        $product->price = $request[ 'price_product'];
        $product->stock = $request['stock_product'];
        $product->suplayer = $request[ 'suplayer_product'];
        $product->foto = basename($path);
        $product->status = $request['status_product'];
        $product-> save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'product_product' => 'required',
                'price_product' => 'required|integer',
                'stock_product' => 'required',
                'suplayer_product' => 'required',
                'foto_product' => 'mimes:jpg,png,gif,jpeg|image|max:5049',
                'status_product' => 'required',
            ],
            [
                'product_product.required' => 'product tidak boleh kosong',
                'price_product.required' => 'mohon pilih jenis admin',
                'stock_product.required' => 'email tidak boleh kosong',
                'suplayer_product.required' => 'emael sudah terdaftar',
                'foto_product.max' => 'foto tidak boleh kosong',
                'foto_product.mimes' => 'extension foto hanya jpg, png jpeg, or gif',
                'status_product.required' => 'password tidak boleh kosong',
                
            ]
        );

        if($request->foto_product) {
            if($request->foto_lama){
               Storage::delete($request->foto_lama);
            }
            $path = $request->file('foto_product')->store('public/uploads');
            } else {
                $path = $request->foto_lama;
            }
        $path=$request->file('foto_product')->store('public/uploads');

        $product =Product::fine($id);
        $product->nama_produk = $request[ 'product_product'];
        $product->price = $request[ 'price_product'];
        $product->stock = $request['stock_product'];
        $product->suplayer = $request[ 'suplayer_product'];
        $product->foto = basename($path);
        $product->status = $request['status_product'];
        $admin->save();

        return redirect('/product');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy('id',$id);
        return redirect ('/product');
    }  
}
