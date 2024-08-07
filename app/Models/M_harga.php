<?php
namespace App\Models;

use CodeIgniter\Model;

class M_harga extends Model
{
    protected $table = 'harga';
    protected $primaryKey = 'id_harga';
    protected $allowedFields = ['nama', 'detail','harga','estimasi'];

    public function deleteharga($id_harga)
    {
        return $this->delete($id_harga);
    }

    public function gethargaById($id_harga)
    {
        return $this->where('id_harga', $id_harga)->first();
    }

    public function search($keyword)
    {
        return $this->like('nama', $keyword, 'both', null, true)
                    ->orLike('harga', $keyword, 'both', null, true)
                    ->findAll();
    }
}
