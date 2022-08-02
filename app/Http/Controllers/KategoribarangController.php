<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class KategoribarangController extends Controller
{
    public function index()
    {
    $kategori = Kategori::all();
    return view('master_barang/kategori',compact('kategori'));
    }

    function kategori(){
        $kategori = array(
            'judul' => 'kategori',
            'Kategori' => Kategori::all(),
        );

        return view('master_barang.addkategori',$kategori);
    }

    function tambahkategori(Request $rq){
        $qry=Kategori::insert(
            [
                //'id_kategori'=> $rq->id_kategori,
                'nama_kategori' => $rq->nama_kategori,
            ]
        );

        Alert::success('Berhasil', 'Menambahkan Data Barang');
        return redirect('/master_barang/kategori');
    }

}
