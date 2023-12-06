<?php

namespace App\Models;

use CodeIgniter\Model;

class IkanModel extends Model
{
    protected $table = 'tabelikan';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['Nama_Ikan', 'Jenis_Ikan', 'Gender_Ikan', 'Stock', 'Harga_Per_Ekor', 'Foto_Ikan'];

    public function getAllIkan()
    {
        return $this->findAll();
    }

 
    public function getIkanById($id)
    {
        return $this->find($id);
    }

   
    public function updateDataIkanById($id, $data)
    {
        return $this->update($id, $data);
    }

 
    public function deleteDataIkanById($id)
    {
        return $this->delete($id);
    }

   
    
}
