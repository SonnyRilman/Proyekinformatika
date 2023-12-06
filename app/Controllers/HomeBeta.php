<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CostumerModel;
class HomeBeta extends BaseController
{
    public function index()
    {
        // Tampilkan halaman Beranda
        return view('home/home');
    }

    public function about()
    {
        // Tampilkan halaman Tentang Kami
        return view('/home/aboutme');
    }
    public function profil()
    {
        // Tampilkan halaman Tentang Kami
        return view('/home/profilfounders');
    }

    public function testimoni()
    {
    
        return view('/home/testimoni');
    }

    public function kontak()
    {
       
        return view('/home/kontak');
    }



    public function fish()
    {
        // Tampilkan halaman daftar produk ikan cupang
        return view('/Home/fish_list');

    }
    public function login()
    {
        // Mendapatkan instance dari model UserModel
        $userModel = new UserModel();

        // Mendapatkan data pengguna berdasarkan username
        $username = 'sonny';
        $user = $userModel->getUserByUsername($username);

        // Menampilkan data pengguna di view
        $data['user'] = $user;
        return view('/Home/user_login_view', $data);
    }



    public function registrasi()
    {
        // Logika untuk proses registrasi akun
        // Misalnya, arahkan ke halaman registrasi
        return view('/Home/registrasi');
    }

}
