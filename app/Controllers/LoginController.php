<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\RegistrasiModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('user_login_view');

    }

    // ...
    public function prosesLogin()
    {
        $loginModel = new LoginModel();
        $registrasiModel = new RegistrasiModel();

        $username = $this->request->getPost('username');
        $inputPasswords = $this->request->getPost('password');

        if (!is_array($inputPasswords)) {
            $inputPasswords = [$inputPasswords];
        }

        foreach ($inputPasswords as $inputPassword) {
            $registrasiData = $registrasiModel->getByUsername($username);

            if ($registrasiData) {
                $storedPassword = $registrasiData['KataSandi'];

                if (password_verify($inputPassword, $storedPassword)) {
                    $data = [
                        'Username' => $registrasiData['Nama'],
                        'Password' => $storedPassword
                    ];

                    if ($loginModel->insert($data)) {
                  
                        if ($registrasiData['Pilihan'] === 'Admin') {
                            return view('/admin/admin_home');
                        } else {
                            return view('/customer/customer_home');
                        }
                    } else {
                        echo "Gagal menyimpan data login!";
                        return;
                    }
                } else {
                    echo "Username atau password salah!";
                    return view('user_login_view', ['error' => 'Username atau password salah!']);
                }
            }
        }


        return view('user_login_view', ['error' => 'Username atau password salah!']);
    }
}