<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Stok_barang;
use App\Models\Mbarang;
use App\Models\Suplier;
use App\Models\Tpembelian;
use App\Models\Tpembelianbarang;
use App\Models\Kategori;
use App\Models\Merek;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Suplier
        Suplier::create([
            'nama_suplier' => 'PT Sejahtera',
            'nama_barang' => 'Kemeja',
            'no_telp' => '0858231621',
            'alamat' => 'Jakarta',
        ]);

        //Barang
        //Mbarang::create([
          //  'nama_barang' => 'Kemeja',
          //  'harga_satuan' => '30000',
          // 'kategori_id' => 'Baju',
        //]);

        //Mbarang::create([
          //  'nama_barang' => 'Gamis',
           // 'harga_satuan' => '60000',
           // 'kategori_id' => 'Baju',
        //]);


        //Barang

        //Users
        $password = 'Agung123';
        User::create([
            'name' => 'Muhamad Agung Gumelar',
            'username' => 'Agung',
            'email' => 'muhamadagunggumelar126@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Admin',
        ]);

        $password1 = 'eva123';
        User::create([
            'name' => 'Eva Indriana Juansyah',
            'username' => 'Eva',
            'email' => 'evaindriana@gmail.com',
            'password' => Hash::make($password1),
            'role' => 'Kasir',
        ]);

        $password2 = 'agung123';
        User::create([
            'name' => 'Agung Gumelar',
            'username' => 'Agung',
            'email' => 'agunggumelar1@gmail.com',
            'password' => Hash::make($password2),
            'role' => 'Kasir',
        ]);
        //Users

        //Profile
        Profile::create([
            'umur' => 18,
            'jenis_kelamin' => 'Pria',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2003-03-29',
            'alamat' => 'Jalan Puspanegara, Kp.Kamurang Rt 02/08, Kel.Puspanegara, Kec. Citeureup',
            'no_telp' => '082246105463',
            'profile_foto' => 'default.svg',
            'user_id' => 1,
        ]);

        Profile::create([
            'umur' => 19,
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2002-02-10',
            'alamat' => 'Jalan Sejahtera, Kp Jambu, Kel. KelapaSari, Kec. cibadak',
            'no_telp' => '0838123123',
            'profile_foto' => 'default.svg',
            'user_id' => 2,
        ]);

        Profile::create([
            'umur' => 20,
            'jenis_kelamin' => 'Pria',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2001-01-12',
            'alamat' => 'Jalan Sejahtera, Kp Jambu, Kel. KelapaSari, Kec. cibadak',
            'no_telp' => '083213123',
            'profile_foto' => 'default.svg',
            'user_id' => 3,
        ]);
        //Profile


        //Transaksi Pembelian
        Tpembelian::create([
            'total_harga' => 39500,
        ]);

        Tpembelian::create([
            'total_harga' => 200000,
        ]);
        //Transaksi Pembelian

        //Transaksi Pembelian Barang
        // Tpembelianbarang::create([
        //     'transaksi_pembelian_id' => 1,
        //     'master_barang_id' => 1,
        //     'jumlah' => 10,
        //     'harga_satuan' => 3000,
        //     'pengguna'=> ""
        // ]);

        // Tpembelianbarang::create([
        //     'transaksi_pembelian_id' => 2,
        //     'master_barang_id' => 2,
        //     'jumlah' => 5,
        //     'harga_satuan' => 1000,
        //     'pengguna'=> "ADMIN"
        // ]);

        // Tpembelianbarang::create([
        //     'transaksi_pembelian_id' => 3,
        //     'master_barang_id' => 3,
        //     'jumlah' => 3,
        //     'harga_satuan' => 1500,
        //     'pengguna'=> "KASIR"
        // ]);

        // Tpembelianbarang::create([
        //     'transaksi_pembelian_id' => 4,
        //     'master_barang_id' => 4,
        //     'jumlah' => 10,
        //     'harga_satuan' => 20000,
        //     'pengguna'=> "ADMIN"
        // ]);
        //Transaksi Pembelian Barang

         //kategori
         Kategori::create([
            'nama_kategori' => 'Baju Anak',
        ]);
        //kategori
    }
}
