<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
    protected $table = 'registrasi';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['Nama', 'Email', 'KataSandi', 'Pilihan'];

    public function getByUsername($username)
    {
        return $this->where('Nama', $username)->first();
    }
}