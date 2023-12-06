<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function isAdmin($username)
    {
        $user = $this->getUserByUsername($username);

        if ($user) {
            return true;
        }

        return false;
    }
}