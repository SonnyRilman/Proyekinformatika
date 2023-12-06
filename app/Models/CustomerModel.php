<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'Customer';
    protected $primaryKey = 'Gmail';

    protected $allowedFields = ['Gmail', 'Nama', 'Alamat', 'Username', 'Password'];

    // Tambahkan metode lain sesuai kebutuhan
}
