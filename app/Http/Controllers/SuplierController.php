<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use App\Exports\SuplierExport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use SebastianBergmann\Exporter\Exporter;

class SuplierController extends Controller
{

    //MENAMPILKAN TABEL
    public function index()
    {
        $suplier = Suplier::all();
        return view('suplier.index', compact('suplier'));
    }

    //MENAMBAHKAN DATA
    public function create()
    {
        return view('suplier.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_suplier' => 'required',
            'nama_barang' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        Suplier::create([
            "nama_suplier" => $request["nama_suplier"],
            "nama_barang" => $request["nama_barang"],
            "no_telp" => $request["no_telp"],
            "alamat" => $request["alamat"],
        ]);

        Alert::success('Berhasil', 'Menambahkan Data Suplier');
        return redirect('/suplier');
    }


     //MENAMPILKAN DATA SHOW
    public function show($id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.show', compact('suplier'));
    }

    //EDIT
    public function edit($id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.edit', compact('suplier'));
    }

    //UPDATE
    public function update(request $request, $id)
    {
        $request->validate([
            'nama_suplier' => 'required',
            'nama_barang' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        $suplier = Suplier::find($id);

        $data_suplier = [
            'nama_suplier' => $request->nama_suplier,
            'nama_barang' => $request->nama_barang,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ];

        $suplier->update($data_suplier);
        Alert::success('Berhasil', 'Mengubah Data Suplier');
        return redirect('/suplier');
    }

    //HAPUS
    public function destroy($id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();
        Alert::success('Berhasil', 'Menghapus Data Suplier');
        return redirect('/suplier');
    }

    //PDF
    public function pdf()
    {
        $suplier = Suplier::all();
        $pdf = PDF::loadview('suplier.pdf', compact('suplier'));
        return $pdf->stream('suplier.pdf');
    }

    //PRINT
    public function print()
    {
        $suplier = Suplier::all();
        return view('suplier.print', compact('suplier'));
    }

    //PDF DETAIL
    public function pdf_detail($id)
    {
        $suplier = Suplier::find($id);
        $pdf = PDF::loadview('suplier.pdf_detail', compact('suplier'));
        return $pdf->stream('suplier_detail.pdf');
    }

    //DETAIL PRINT
    public function print_detail($id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.print_detail', compact('suplier'));
    }

    //EXCEL
    public function excel()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new Exporter, 'suplier.xlsx');
    }
    // public function cari(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari table pegawai sesuai pencarian data
    //     $barang = Mbarang::where('nama_barang', 'harga_satuan', $cari);

    //     // mengirim data pegawai ke view index
    //     return view('master_barang.index', compact('barang'));
    // }
}
