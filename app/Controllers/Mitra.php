<?php

namespace App\Controllers;

use App\Models\M_mitra;
use CodeIgniter\Controller;

class Mitra extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_mitra();
                $data['mitra'] = $model->findAll();
                return view('admin/v_mitra', $data);
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

        $model = new M_mitra();
        $data['mitra'] = $model->search($keyword);

        return view('admin/v_mitra', $data);
    }

    public function hapus($id_mitra)
    {
        $model = new M_mitra();
        $mitra = $model->find($id_mitra);

        if ($mitra) {
            $model->deletemitra($id_mitra);
            return redirect()->to(site_url('Mitra'));
        } else {
            return redirect()->to(site_url('Mitra'));
        }
    }
}
