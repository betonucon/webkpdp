<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Produk;
class ProdukController extends Controller
{
    public function index(request $request){
        $halaman='Produk';
        if($request->kategori==''){
            $kategori=1;
        }else{
            $kategori=$request->kategori;
        }
        $judul=cek_kategori_produk($kategori);
        
        $data=Produk::where('kategori_produk_id',$kategori)->get();
        return view('produk',compact('halaman','kategori','data','judul'));
    }
}
