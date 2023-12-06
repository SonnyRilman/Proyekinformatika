<?php

namespace App\Models;

use CodeIgniter\Model;

class KelolaKeuanganModel extends Model
{
    protected $table = 'History';
    protected $primaryKey = 'Id_Cupang';

    protected $allowedFields = ['Id_Cupang', 'History_Description', 'Tanggal_History', 'Harga'];

   
}
