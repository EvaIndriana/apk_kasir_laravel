<?php

namespace App\Http\Controllers;

use App\Models\Stok_barang;
use App\Exports\StokExport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class Stok_barangController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $barang = Stok_barang::all();
            return view('stok_barang.index', compact('barang'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('stok_barang.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $request->validate([
                'nama_barang' => 'required',
                'harga_satuan' => 'required'
            ]);
    
            Stok_barang::create([
                "nama_barang" => $request["nama_barang"],
                "harga_satuan" => $request["harga_satuan"]
            ]);
    
            Alert::success('Berhasil', 'Menambahkan Data Barang');
            return redirect('/stok-barang');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Stok_barang  $mbarang
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $barang = Stok_barang::find($id);
            return view('stok_barang.show', compact('barang'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Mbarang  $mbarang
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $barang = Stok_barang::find($id);
            return view('stok_barang.edit', compact('barang'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Stok_barang  $stok_barang
         * @return \Illuminate\Http\Response
         */
        public function update(request $request, $id)
        {
            $request->validate([
                'nama_barang' => 'required',
                'harga_satuan' => 'required',
            ]);
    
            $barang = Stok_barang::find($id);
    
            $data_barang = [
                'nama_barang' => $request->nama_barang,
                'harga_satuan' => $request->harga_satuan,
            ];
    
            $barang->update($data_barang);
            Alert::success('Berhasil', 'Mengubah Data Barang');
            return redirect('/stok-barang');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Stok_barang  $stok_barang
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $barang = Stok_barang::find($id);
            $barang->delete();
            Alert::success('Berhasil', 'Menghapus Data Barang');
            return redirect('/stok-barang');
        }
    
    }