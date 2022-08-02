<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MbarangController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TpembelianController;
use App\Http\Controllers\TpembelianbarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoribarangController;
use App\Http\Controllers\MerekController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::group(['middleware' => ['web']], function () {
    // Halaman Utama
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:Admin,Kasir');
    // Halaman Utama

    // suplier
    //Route::get('suplier/index',[SuplierController::class,'index'])->name('index');

    Route::resource('/user', UserController::class)->middleware('checkRole:Admin');
    Route::resource('/master-barang', MbarangController::class)->middleware('checkRole:Admin,Kasir');
    Route::resource('/suplier', SuplierController::class)->middleware('checkRole:Admin');
    Route::resource('/dashboard', DashboardController::class)->only(['index'])->middleware('checkRole:Admin');
    Route::resource('/kategori',KategoriController::class)->middleware('checkRole:Admin');
    Route::resource('/profile', ProfileController::class)->only(['index', 'update', 'show'])->middleware('checkRole:Admin,Kasir');
   //Route::resource('/tugas', MbarangController::class)->middleware('checkRole:Admin,Kasir');
    //Transaksi
    Route::resource('/transaksi-pembelian', TpembelianController::class)->only(['index', 'show'])->middleware('checkRole:Admin,Kasir');
    Route::resource('/transaksi-pembelian-barang', TpembelianbarangController::class)->middleware('checkRole:Admin,Kasir');
    //Transaksi

    // DATA PDF
    // Route::get('/pdf-transaksi-pembelian', [TpembelianController::class, 'pdf'])->name('pdf-transaksi-pembelian')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-transaksi-pembelian-barang', [TpembelianbarangController::class, 'pdf'])->name('pdf-transaksi-pembelian-barang')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-master-barang', [MbarangController::class, 'pdf'])->name('pdf-master-barang')->middleware('checkRole:Admin');
    // Route::get('/pdf-user', [UserController::class, 'pdf'])->name('pdf-user')->middleware('checkRole:Admin');
    // Route::get('/pdf-suplier',[SuplierController::class,'pdf'])->name('pdf-suplier')->middleware('checkRole:Admin');
    // DATA PDF

    // DATA EXCEL
    // Route::get('/excel-transaksi-pembelian', [TpembelianController::class, 'excel'])->name('excel-transaksi-pembelian')->middleware('checkRole:Admin,Kasir');
    // Route::get('/excel-transaksi-pembelian-barang', [TpembelianbarangController::class, 'excel'])->name('excel-transaksi-pembelian-barang')->middleware('checkRole:Admin,Kasir');
    // Route::get('/excel-master-barang', [MbarangController::class, 'excel'])->name('excel-master-barang')->middleware('checkRole:Admin');
    // Route::get('/excel-user', [UserController::class, 'excel'])->name('excel-user')->middleware('checkRole:Admin');
    // Route::get('/excel-suplier', [SuplierController::class, 'excel'])->name('excel-suplier')->middleware('checkRole:Admin');
    // DATA EXCEL

    // DATA Print
    // Route::get('/print-transaksi-pembelian', [TpembelianController::class, 'print'])->name('print-transaksi-pembelian')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-transaksi-pembelian-barang', [TpembelianbarangController::class, 'print'])->name('print-transaksi-pembelian-barang')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-master-barang', [MbarangController::class, 'print'])->name('print-master-barang')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-user', [UserController::class, 'print'])->name('print-user')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-suplier', [SuplierController::class, 'print'])->name('print-suplier')->middleware('checkRole:Admin');

    // DATA Print

    // DATA PDF Detail
    // Route::get('/pdf-transaksi-pembelian-detail/{id}', [TpembelianController::class, 'pdf_detail'])->name('pdf-transaksi-pembelian-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-transaksi-pembelian-barang-detail/{id}', [TpembelianbarangController::class, 'pdf_detail'])->name('pdf-transaksi-pembelian-barang-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-master-barang-detail/{id}', [MbarangController::class, 'pdf_detail'])->name('pdf-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/pdf-user-detail/{id}', [UserController::class, 'pdf_detail'])->name('pdf-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/pdf-suplier-detail/{id}', [SuplierController::class, 'pdf_detail'])->name('pdf-suplier-detail')->middleware('checkRole:Admin');
    // DATA PDF Detail

    // DATA Print Detail
    // Route::get('/print-transaksi-pembelian-detail/{id}', [TpembelianController::class, 'print_detail'])->name('print-transaksi-pembelian-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-transaksi-pembelian-barang-detail/{id}', [TpembelianbarangController::class, 'print_detail'])->name('print-transaksi-pembelian-barang-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/print-master-barang-detail/{id}', [MbarangController::class, 'print_detail'])->name('print-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/print-user-detail/{id}', [UserController::class, 'print_detail'])->name('print-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/print-suplier-detail/{id}', [SuplierController::class, 'print_detail'])->name('print-suplier-detail')->middleware('checkRole:Admin');
     //DATA Print Detail

    // DATA Print Excel
     //Route::get('/pdf-transaksi-pembelian-detail/{id}', [TpembelianController::class, 'pdf_detail'])->name('pdf-transaksi-pembelian-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-transaksi-pembelian-barang-detail/{id}', [TpembelianbarangController::class, 'pdf_detail'])->name('pdf-transaksi-pembelian-barang-detail')->middleware('checkRole:Admin,Kasir');
    // Route::get('/pdf-master-barang-detail/{id}', [MbarangController::class, 'pdf_detail'])->name('pdf-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/pdf-user-detail/{id}', [UserController::class, 'pdf_detail'])->name('pdf-master-barang-detail')->middleware('checkRole:Admin');
    // Route::get('/pdf-suplier-detail/{id}', [SuplierController::class, 'pdf_detail'])->name('pdf-suplier-detail')->middleware('checkRole:Admin');


    //JOIN
    Route::get('master_barang/join', [MbarangController::class,'indexjoin'])->name('join')->middleware('checkRole:Admin,Kasir');

   //kategori
    Route::get('master_barang/kategori', [KategoribarangController::class,'index'])->name('kategori')->middleware('checkRole:Admin');
    Route::get('master_barang/addkategori',[KategoribarangController::class,'kategori']);
    Route::post('add',[KategoribarangController::class,'tambahkategori']);

    Route::get('master_barang/merek', [MerekController::class,'index'])->name('merek')->middleware('checkRole:Admin');
    Route::get('merek/addmerek',[MerekController::class,'merek']);
    Route::post('merekmerek',[MerekController::class,'tambahmerek']);

    // DATA Print Excel

    //Library dan Search Manual Laravel Diganti kan oleh datatable dan akhir nya tidak jadi di buat
    // Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    //     \UniSharp\LaravelFilemanager\Lfm::routes();
    //Cari Fitur
    // Route::get('/user-cari', [UserController::class, 'cari'])->name('user-cari')->middleware('checkRole:Admin');
    // Route::get('/barang-cari', [App\Http\Controllers\MbarangController::class, 'cari'])->middleware('checkRole:Admin');
    // //Cari Fitur
    //Library dan Search Manual Laravel Diganti kan oleh datatable dan akhir nya tidak jadi di buat


});
// });
