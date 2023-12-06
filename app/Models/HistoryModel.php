<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $table = 'History';
    protected $primaryKey = 'Id_Cupang';

    protected $allowedFields = ['Id_Cupang', 'History_Description', 'Tanggal_History', 'Harga'];

    // Tambahkan metode lain sesuai kebutuhan

    // Di dalam model HistoryModel
    public function getRiwayatPembelian()
    {
        // Membuat instance dari MemesanModel
        $memesanModel = new MemesanModel();

        // Mendapatkan data dari tabel 'memesan'
        $dataPembelian = $memesanModel->findAll();

        // Mengembalikan data pembelian untuk digunakan dalam tampilan atau kontroler
        return $dataPembelian;
    }

}
