<?php

namespace App\Controllers;

use App\Models\IkanModel;
use App\Models\MemesanModel;
use App\Models\HistoryModel;
class AdminController extends BaseController
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

        return view('admin/admin_home');
    }

    public function add()
    {
        
        helper(['form']);
        return view('admin/add');
    }

    public function simpanDataIkan()
    {
       
        $model = new IkanModel();
        $data = [
            'Nama_Ikan' => $this->request->getPost('Nama_Ikan'),
            'Jenis_Ikan' => $this->request->getPost('Jenis_Ikan'),
            'Gender_Ikan' => $this->request->getPost('Gender_Ikan'),
            'Stock' => $this->request->getPost('Stock'),
            'Harga_Per_Ekor' => $this->request->getPost('Harga_Per_Ekor'),
        ];
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
    // Jika foto valid dan belum dipindahkan
    $newName = $foto->getRandomName(); // Mendapatkan nama acak untuk foto

    // Mendapatkan instance dari File Class dan menggunakan method move()
    $foto->move(ROOTPATH . 'public/uploads', $newName);

    $data['Foto_Ikan'] = $newName; // Menyimpan nama baru foto ke dalam array data
}


        $model->insert($data);

        // Redirect ke halaman success dengan pesan sukses
        return redirect()->to('/admin/success')->with('success', 'Data ikan berhasil ditambahkan.');
    }
    public function success()
    {
        // Tampilkan halaman success
        return view('admin/success');
    }

    public function edit()
    {
        $data['ikanList'] = $this->ikanModel->getAllIkan(); // Ganti dengan metode yang sesuai untuk mengambil semua data ikan
        return view('admin/edit', $data);
    }







    public function updateDataIkan()
    {
        $selectedIkanID = $this->request->getPost('selectedIkan');
        // Ambil data lainnya dari formulir
        $data = [
            'Nama_Ikan' => $this->request->getPost('Nama_Ikan'),
            'Jenis_Ikan' => $this->request->getPost('Jenis_Ikan'),
            'Gender_Ikan' => $this->request->getPost('Gender_Ikan'),
            'Stock' => $this->request->getPost('Stock'),
            'Harga_Per_Ekor' => $this->request->getPost('Harga_Per_Ekor'),
            
        ];

        // Panggil model untuk memperbarui data ikan berdasarkan ID
        $result = $this->ikanModel->updateDataIkanById($selectedIkanID, $data);

        // Redirect ke halaman success dengan pesan sukses atau error
        // ...
        return redirect()->to('/admin/success')->with('success', 'Data ikan berhasil diperbarui.');
    }

    public function delete()
    {
        // Ambil data ikan dari model atau sumber data lain
        $data['ikanList'] = $this->ikanModel->getAllIkan(); // Ganti dengan metode yang sesuai

        // Tampilkan halaman delete dan kirimkan data ikan
        return view('admin/delete', $data);
    }

    public function confirmDelete()
    {
        // Ambil ID ikan yang dipilih dari formulir
        $selectedIkanId = $this->request->getPost('selectedIkan');

        // Panggil model untuk menghapus data ikan berdasarkan ID
        $result = $this->ikanModel->deleteDataIkanById($selectedIkanId);

        if ($result) {
            // Redirect ke halaman success dengan pesan sukses
            return redirect()->to('/admin/success')->with('success', 'Data ikan berhasil dihapus.');
        } else {
            // Redirect ke halaman admin/delete dengan pesan error jika terjadi masalah
            return redirect()->to('/admin/delete')->with('error', 'Gagal menghapus data ikan.');
        }
    }


    public function deletee()
    {
        // Tampilkan halaman success
        return view('/admin_home');
    }
    public function tampilIkanList()
    {
        $model = new IkanModel();
        $data['ikanList'] = $model->findAll(); // Mengambil semua data ikan

        return view('admin/ikan_list', $data);
    }



    public function konfirmasiPesanan()
    {
        // Ambil data pesanan yang menunggu konfirmasi dari model MemesanModel
        $data['pesananList'] = $this->memesanModel->getPesananMenungguKonfirmasi(); // Sesuaikan dengan metode yang sesuai di model

        // Tampilkan halaman konfirmasi pesanan dengan data pesanan
        return view('admin/konfirmasi_pesanan', $data);
    }

    public function confirmOrder($resi_transaksi)
    {
        if ($this->memesanModel->confirmOrder($resi_transaksi)) {
            return redirect()->to('/admin/konfirmasi-pesanan')->with('success', 'Pesanan dikonfirmasi.');
        } else {
            return redirect()->to('/admin/konfirmasi-pesanan')->with('error', 'Gagal mengkonfirmasi pesanan.');
        }
    }

}
