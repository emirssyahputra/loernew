<?php

namespace App\Controllers;
use App\Models\M_harga;
use App\Models\M_faq;

class Partnership extends BaseController
{
    public function index()
    {
        $model = new M_faq();
        $hargamodel = new M_harga();
        $data['faq'] = $model->findAll();
        $data['harga'] = $hargamodel->findAll();
        $totalHarga = 0;
        foreach ($data['harga'] as $hargaa) {
            $totalHarga += $hargaa['harga'];
        }
        $data['totalharga'] = $totalHarga;
        return view('v_partnership', $data);
    }
}
