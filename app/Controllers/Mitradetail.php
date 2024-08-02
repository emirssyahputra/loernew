<?php

namespace App\Controllers;

use App\Models\M_mitra;
use CodeIgniter\Controller;

class Mitradetail extends BaseController
{
    public function index($id_mitra)
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_mitra();
                $data['mitra'] = $model->find($id_mitra);
                return view('admin/v_mitradetail', $data);
            } else {
                session()->destroy();
                return redirect()->to(site_url('login'));
            }
        } else {
            return redirect()->to(site_url('login'));
        }
    }

}
