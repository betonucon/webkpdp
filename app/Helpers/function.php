<?php

function url_linknya(){
    $data='w';
    return $data;
}
function link_server(){
    $data='http://admin.kreasiteknologi.com/';
    return $data;
}

function tentang_kami(){
    $data=App\About::where('kategori','sekilas')->first();

    return $data;
}
function barner(){
    $data=App\Barner::orderBy('id','Desc')->paginate(3);

    return $data;
}
function kategori_produk(){
    $data=App\Kategoriproduk::orderBy('id','Desc')->get();

    return $data;
}
function cek_kategori_produk($id){
    $data=App\Kategoriproduk::where('id',$id)->first();

    return $data['name'];
}
function new_home(){
    $data=App\News::orderBy('id','Desc')->paginate(3);

    return $data;
}
function new_all(){
    $data=App\News::orderBy('id','Desc')->paginate(30);

    return $data;
}
function pengumuman_home(){
    $data=App\Pengumuman::orderBy('id','Desc')->paginate(3);

    return $data;
}
function new_lainnya($id){
    $data=App\News::where('id','!=',$id)->orderBy('id','Desc')->paginate(5);

    return $data;
}
function new_lainnya2(){
    $data=App\News::orderBy('id','Desc')->paginate(5);

    return $data;
}

function enkripsi_akuh($id){
    $encrypted = base64_encode($id);
    
    return $encrypted;

}
function deskripsi_akuh($id){
    $decrypted = base64_decode("'.$id.'");
    
    return $decrypted;

}

function link_gambar($id){
    $data='http://localhost/kpdp/kpdp/public/file/news/'.$id;
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://localhost/kpdp/kpdp/public/file/news/".$id);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    

    return $result;
}
function link_barner($id){
    $data='http://localhost/kpdp/kpdp/public/file/barner/'.$id;
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://localhost/kpdp/kpdp/public/file/barner/".$id);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    

    return print $result;
}
function link_gambar_produk($id){
    $data='http://adminkpdp.uconbeton.com/public/file/produk/'.$id;
    return $data;
}

function nama_perusahaan(){
    $data='KPDP';
    return $data;
}

function tgl($tgl){
    $ttg=explode('-',$tgl);
    return $ttg[2];
}

function bulan_tahun($tgl){
    
    $bulan=date('F',strtotime($tgl));
    $tahun=date('Y',strtotime($tgl));
    $bln=substr($bulan,0,3);
    return $bln.' '.$tahun;
}
function bulan_tahun_lengkap($tgl){
    
    $bulan=date('F',strtotime($tgl));
    $tahun=date('Y',strtotime($tgl));
    $bln=$bulan;
    return $bln.' '.$tahun;
}

function tgl_lainnya($tgl){
    
    $tanggal=date('d',strtotime($tgl));
    $bulan=date('F',strtotime($tgl));
    $tahun=date('Y',strtotime($tgl));
    $bln=substr($bulan,0,3);
    return $bln.' '.$tanggal.','.$tahun;
}




?>