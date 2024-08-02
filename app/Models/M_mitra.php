<?php
namespace App\Models;

use CodeIgniter\Model;

class M_mitra extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id_mitra';
    protected $allowedFields = ['nama', 'email','hp','alamat','pekerjaan','info'];

    public function deletemitra($id_mitra)
    {
        return $this->delete($id_mitra);
    }

    public function gethargaById($id_mitra)
    {
        return $this->where('id_mitra', $id_mitra)->first();
    }

    public function search($keyword)
    {
        return $this->like('nama', $keyword, 'both', null, true)
                    ->orLike('email', $keyword, 'both', null, true)
                    ->orLike('hp', $keyword, 'both', null, true)
                    ->findAll();
    }
}
