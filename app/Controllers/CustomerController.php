<?php

namespace App\Controllers;

use App\Models\IkanModel;
use App\Models\MemesanModel;

class CustomerController extends BaseController
{
    protected $ikanModel;
    protected $memesanModel;

    public function __construct()
    {
        $this->ikanModel = new IkanModel();
        $this->memesanModel = new MemesanModel();
    }

    public function index()
    {
        // Tampilkan halaman utama untuk pelanggan
        return view('customer/customer_home');
    }

    public function beli()
    {
        // Tampilkan halaman pembelian ikan untuk pelanggan
        $data['ikanList'] = $this->ikanModel->getAllIkan(); // Ganti dengan metode yang sesuai untuk mengambil semua data ikan
        return view('customer/produk_ikan', $data);
    }

    // Di dalam metode tampilkanFormPembelian
    public function tampilkanFormPembelian($id_ikan)
    {
        // Tampilkan halaman formulir pembelian dengan informasi ikan
        $data['ikan'] = $this->ikanModel->getIkanById($id_ikan);

        // Pemeriksaan data ikan
        if (empty($data['ikan'])) {
           
            die('Data ikan tidak ditemukan.');
        }

        return view('customer/form_pembelian', $data);
    }

    public function prosesPembelian()
    {
     
        $selectedIkanID = $this->request->getPost('selectedIkan');
        $jumlahIkan = $this->request->getPost('jumlah_ikan');
        $jenisPayment = $this->request->getPost('jenis_payment');
        $totalHarga = $this->request->getPost('total_harga');
        // Mendapatkan informasi pelanggan yang sedang login
        $namaCostumer = session('nama_costumer');
        $alamat = session('alamat');
        $gmail = session('gmail');
        // Lakukan logika pembelian sesuai kebutuhan

        $dataPembelian = [
            'Resi_transaksi' => null, // Biarkan null agar dihasilkan otomatis
            'Nama_Costumer' => $this->request->getPost('nama_costumer'),
            'Alamat' => $this->request->getPost('alamat'),
            'Email' => $this->request->getPost('gmail'),
            'Nama_Ikan' => $this->request->getPost('nama_ikan'), // Sesuaikan dengan metode yang sesuai untuk mengambil nama ikan
            'Jumlah_Ikan' => $jumlahIkan,
            'Total_Harga' => $totalHarga, // Sesuaikan dengan logika yang dibutuhkan,
            'Jenis_Payment' => $jenisPayment, // Tambahkan Jenis_Payment
            'Tanggal_Beli' => date('Y-m-d'), // Tanggal pembelian diisi dengan tanggal sekarang
            'Status' => 'Menunggu Konfirmasi', // Status awal pembelian
        ];


        // Simpan data ke dalam tabel memesan
        $this->memesanModel->insertData($dataPembelian);

        // Redirect ke halaman success dengan pesan sukses

        // Redirect ke halaman success dengan pesan sukses
        return redirect()->to('/customer/success')->with('success', 'Pembelian berhasil.');
    }

    public function success()
    {
        // Tampilkan halaman success untuk pelanggan
        return view('customer/succes');
    }
}