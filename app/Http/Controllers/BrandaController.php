<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Crypt;
class BrandaController extends Controller
{
    public function index(request $request){

        return view('index');
    }

    public function gambar_news(request $request){
		$curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, "".link_server()."/public/file/news/".$request['file']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($curl);
        curl_close ($curl);
        print $result;
	}
    public function gambar_barner(request $request){
		$curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, "".link_server()."/public/file/barner/".$request['file']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($curl);
        curl_close ($curl);
        print $result;
	}
    public function gambar_pengumuman(request $request){
		$curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, "".link_server()."/public/file/pengumuman/".$request['file']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($curl);
        curl_close ($curl);
        print $result;
	}
    public function gambar_produk(request $request){
		$curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, "".link_server()."/public/file/produk/".$request['file']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($curl);
        curl_close ($curl);
        print $result;
	}
    public function news($link){
        $halaman='News KPDP';
        $data=News::where('link',$link)->first();
        $kategori='News ';
        return view('news',compact('halaman','data','kategori'));
    }

    public function news_all(){
        $halaman='Semua Berita';
        return view('news_all',compact('halaman'));
    }

    public function about(request $request){
        $halaman='About KPDP';
        if($request->kategori==''){
            $kategori='sekilas';
        }else{
            $kategori=$request->kategori;
        }
        if($kategori=='visi'){
            $judul='Visi dan Misi';
        }else{
            $judul=$kategori;
        }
        $data=About::where('kategori',$kategori)->first();
        return view('about',compact('halaman','kategori','data','judul'));
    }

    public function kontak(request $request){
        $halaman='Contact Us';
        
        $kategori='Contact Us';
    
        $judul=$kategori;
       
        $data=About::where('kategori','kontak')->first();
        return view('kontak',compact('halaman','kategori','data','judul'));
    }
}
