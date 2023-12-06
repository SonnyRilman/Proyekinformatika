<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['Username', 'Password'];

    public function insertLogin($data)
    {
        return $this->insert($data);
    }
}