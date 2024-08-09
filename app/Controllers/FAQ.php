<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_faq;

class FAQ extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_faq();
                $data['faq'] = $model->findAll();
                return view('admin/v_faq', $data);
            } else {
                session()->destroy();
                return redirect()->to(site_url('login'));
            }
        } else {
            return redirect()->to(site_url('login'));
        }
    }

    public function search()
    {
        $keyword = $this->request->getPost('pencarian');

        $model = new M_faq();
        $data['faq'] = $model->search($keyword);

        return view('admin/v_faq', $data);
    }

    public function hapus($id_faq)
    {
        $model = new M_faq();
        $faq = $model->find($id_faq);

        if ($faq) {
            $model->deletefaq($id_faq);
            return redirect()->to(site_url('FAQ'));
        } else {
            return redirect()->to(site_url('FAQ'));
        }
    }
}
