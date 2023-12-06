<?php

namespace App\Models;

use CodeIgniter\Model;

class MemesanModel extends Model
{
    protected $table = 'memesan'; 
    protected $primaryKey = 'Resi_Transaksi'; 
    protected $allowedFields = [
        'Resi_Transaksi',
        'Jumlah_Ikan',
        'Total_Harga',
        'Jenis_Payment',
        'Tanggal_Beli',
        'Status',
        'Nama_Costumer',
        'Alamat',
        'Email',
        'Nama_Ikan'
    ];

   

    public function insertData($data)
    {
        
        $this->insert($data);
    }
    public function getPesananMenungguKonfirmasi()
    {
        return $this->where('Status', 'Menunggu Konfirmasi')->findAll();
    }
   public function confirmOrder($resi_transaksi)
{
    // Mendapatkan data pesanan berdasarkan nomor resi transaksi
    $existingData = $this->where('Resi_Transaksi', $resi_transaksi)->first();

    // Memeriksa apakah data pesanan ditemukan
    if (!empty($existingData)) {
        // Menjalankan operasi UPSERT untuk mengupdate atau memasukkan data baru
        $this->db->query("INSERT INTO memesan (Resi_Transaksi, Status) VALUES (?, 'Dikonfirmasi') ON DUPLICATE KEY UPDATE Status = 'Dikonfirmasi'", [$resi_transaksi]);
    } else {
        // Handle jika data tidak ditemukan
        // Misalnya, throw exception atau tampilkan pesan kesalahan
        throw new \RuntimeException('Pesanan tidak ditemukan.');
    }

    // Mengembalikan true jika berhasil mengonfirmasi pesanan
    return true;
}


}