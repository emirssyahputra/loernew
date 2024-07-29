<?php namespace App\Models;

use CodeIgniter\Model;

class M_outlet extends Model
{
    protected $table = 'cabang'; 
    protected $primaryKey = 'id_cabang';
    protected $allowedFields = ['nama', 'alamat', 'jam', 'startDay', 'endDay', 'jamBuka', 'jamTutup', 'map']; 

    public function hapusoutlet($id)
    {
        return $this->delete($id);
    }
}
