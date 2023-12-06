<?php

namespace App\Controllers;

use App\Models\RegistrasiModel;

class RegistrasiController extends BaseController
{
    public function index()
    {
        return view('registrasi');
    }

    public function simpanRegistrasi()
    {
        $registrasiModel = new RegistrasiModel();

        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $pilihan = $this->request->getPost('pilihan');

        $data = [];

        foreach ($nama as $key => $value) {
            $data[] = [
                'Nama' => $value,
                'Email' => $email[$key],
                'KataSandi' => password_hash($password[$key], PASSWORD_DEFAULT),
                'Pilihan' => $pilihan[$key]
            ];
        }

        if ($registrasiModel->insertBatch($data)) {
            echo "Registrasi berhasil!";
        } else {
            echo "Registrasi gagal!";
        }
    }
}