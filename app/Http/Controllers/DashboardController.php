<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Mbarang;
use App\Models\Stok_barang;
use App\Models\Suplier;
use App\Models\Tpembelian;
use App\Models\Tpembelianbarang;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $profile = Profile::count();
        $mbarang = Mbarang::count();
        $suplier = Suplier::count();
        $tpembelian = Tpembelian::count();
        $tpembelianbarang = Tpembelianbarang::count();

        return view('dashboard', compact('user', 'profile', 'mbarang', 'tpembelian', 'tpembelianbarang', 'suplier'));
    }
}