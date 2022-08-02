<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;
use RealRashid\SweetAlert\Facades\Alert;

class MerekController extends Controller
{
    public function index()
    {
    $merek = Merek::all();
    return view('master_barang/merek',compact('merek'));
    }

    function merek(){
        $merek = array(
            'judul' => 'merek',
            'Merek' => Merek::all(),
        );

        return view('merek.addmerek',$merek);
    }

    function tambahmerek(Request $rq){
        $qry=Merek::insert(
            [

                'nama_merek' => $rq->nama_merek,
            ]
        );

        Alert::success('Berhasil', 'Menambahkan Data Barang');
        return redirect('/master_barang/merek');
    }
}
