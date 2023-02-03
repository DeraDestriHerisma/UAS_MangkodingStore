<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function beranda(){
        $data = Produk::all();
        return view('beranda',compact('data'));
    }

    public function index(){
        $data = Produk::all();
        return view('produk',compact('data'));
    }

    public function tambahProduk(){
        return view('tambahProduk');
    }

    public function insertProduk(Request $request){
        $data = Produk::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('produk');
    }

    public function editProduk($id){
        $data = Produk::find($id);
        // $data->delete(); 
        return view('editProduk', compact('data'));
    }

    public function updateProduk(Request $request, $id){
        $data = Produk::find($id);
        $data->update($request->all()); 
        return redirect()->route('produk');
    }

    public function deleteProduk($id){
        $data = Produk::find($id);
        $data->delete(); 
        return redirect()->route('produk');
    }
}
