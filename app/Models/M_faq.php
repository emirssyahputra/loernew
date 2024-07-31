<?php
namespace App\Models;

use CodeIgniter\Model;

class M_faq extends Model
{
    protected $table = 'faq';
    protected $primaryKey = 'id_faq';
    protected $allowedFields = ['ask', 'question'];

    public function deletefaq($id_faq)
    {
        return $this->delete($id_faq);
    }

    public function getfaqById($id_faq)
    {
        return $this->where('id_faq', $id_faq)->first();
    }

    public function search($keyword)
    {
        return $this->like('ask', $keyword, 'both', null, true)
                    ->orLike('question', $keyword, 'both', null, true)
                    ->findAll();
    }
}
