<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'Admin';
    protected $primaryKey = 'Username';

    protected $allowedFields = ['Username', 'Password'];

    // Tambahkan metode lain sesuai kebutuhan
}
