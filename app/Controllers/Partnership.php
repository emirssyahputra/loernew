<?php

namespace App\Controllers;
use App\Models\M_outlet;
use App\Models\M_faq;

class Partnership extends BaseController
{
    public function index()
    {
        $model = new M_faq();
        $data['faq'] = $model->findAll();
        return view('v_partnership', $data);
    }
}
