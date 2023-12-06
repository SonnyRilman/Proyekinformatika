<?php
// File: app/Models/KonfirmasiModel.php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiModel extends Model
{
    protected $table = 'nama_tabel_konfirmasi'; // Sesuaikan dengan nama tabel konfirmasi
    protected $primaryKey = 'id_konfirmasi'; // Sesuaikan dengan nama kolom primary key pada tabel konfirmasi

    public function konfirmasiPesanan($resi_transaksi)
    {
        // Lakukan logika konfirmasi pesanan
        // Misalnya, ubah status pesanan menjadi "Dikonfirmasi"
        $dataToUpdate = [
            'status' => 'Dikonfirmasi',
            // tambahkan kolom atau nilai lain sesuai kebutuhan
        ];

        $this->where('resi_transaksi', $resi_transaksi)->update($dataToUpdate);

        return true; // atau false jika terjadi kesalahan
    }

    // ... mungkin ada metode lain di sini ...
}
