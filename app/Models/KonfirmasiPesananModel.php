<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiPesananModel extends Model
{
    protected $table = 'Memesan';
    protected $primaryKey = 'Resi';

    protected $allowedFields = ['Resi', 'Transaksi', 'Jumlah_Ikan', 'Total_Harga', 'Jenis_Payment', 'Tanggal_Beli', 'Status'];

   
}
