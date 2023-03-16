<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Log::info("user sedang menampilkan semua data produk");
        $products = Product::select('id','judulproduk','deskripsi','harga','gambar')->get();
		return response()->json([
			'data' => $products
	    ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('user sedang menambahkan data produk');
        $validasi = Validator::make($request->all(), [
            'judulproduk'  => 'required',
            'deskripsi'   => 'required',
            'harga'       => 'required|integer',
            'gambar'      => 'required|image|mimes:jpg,png|max:4096'
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 422);
        }

        $gambar = $request->file('gambar')->store('public/gambar');
        $data = Product::create([
            'judulproduk'  => $request->judulproduk,
            'deskripsi'   => $request->deskripsi,
            'harga'       => $request->harga,
            'gambar'      => $gambar
        ]);

        return response()->json([
            "status" => "berhasil",
            "data"   => $data
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        Log::info('user sedang menampilkan data produk dengan id='.$id);
        $product = Product::select('id','judulproduk', 'deskripsi', 'harga', 'gambar')
        ->where('id', $id)->first();
        return response()->json([
            "data" => $product
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Log::info('user sedang mengubah data produk dengan id='.$id);
        $validasi = Validator::make($request->all(), [
            'judulproduk'  => 'required',
            'deskripsi'   => 'required',
            'harga'       => 'required|integer'
        ]);

        //respon kalo validasinya gagal
        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 422);
        }
        
        Product::where('id', $id)->update($request->all());
        return response()->json([
            "status" => "update sukses"

        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Log::info('user sedang menghapus data produk dengan id='.$id);
        $product = Product::where('id', $id)->first();
        if ($product->gambar) {
            Storage::delete($product->gambar);
        }
        //menghapus data dari database
        $product->delete();
        return response()->json([
            "status" => "hapus sukses"
        ], 200);
    }
}
