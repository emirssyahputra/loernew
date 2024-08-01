<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_faq;

class TambahFAQ extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_faq();
                $data['faq'] = $model->findAll();
                return view('admin/v_tambah_faq', $data);
            } else {
                session()->destroy();
                return redirect()->to(site_url('login'));
            }
        } else {
            return redirect()->to(site_url('login'));
        }
    }

    public function save()
    {
        $model = new M_faq();

        $faqData = [
            'ask' => $this->request->getPost('ask'),
            'question' => $this->request->getPost('question'),
        ];

        $model->insert($faqData);

        return redirect()->to(site_url('FAQ'));
    }
}
