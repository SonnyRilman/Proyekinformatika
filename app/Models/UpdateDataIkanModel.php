<?php

namespace App\Models;

use CodeIgniter\Model;

class UpdateDataIkanModel extends Model
{
    protected $table = 'Ikan';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['Ikan', 'Nama_Ikan', 'Jenis_Ikan', 'Gender_Ikan', 'Stock', 'Harga_Per_Ekor'];

    
}
