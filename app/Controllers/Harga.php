<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Harga;

class Harga extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_Harga();
                $data['harga'] = $model->findAll();
                return view('admin/v_harga', $data);
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

        $model = new M_Harga();
        $data['harga'] = $model->search($keyword);

        return view('admin/v_harga', $data);
    }

    public function hapus($id_harga)
    {
        $model = new M_Harga();
        $harga = $model->find($id_harga);

        if ($harga) {
            $model->deleteharga($id_harga);
            return redirect()->to(site_url('Harga'));
        } else {
            return redirect()->to(site_url('Harga'));
        }
    }
}
