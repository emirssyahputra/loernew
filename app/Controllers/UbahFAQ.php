<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_faq;

class UbahFAQ extends BaseController
{
    public function index($id_faq)
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_faq();
                $data['faq'] = $model->getfaqById($id_faq);

                return view('admin/v_ubah_faq', $data);
            } else {
                session()->destroy();
                return redirect()->to(site_url('login'));
            }
        } else {
            return redirect()->to(site_url('login'));
        }
    }

    public function update()
    {
        $model = new M_faq();

        $id_faq = $this->request->getPost('id_faq'); // Use getPost instead of getVar
        $data = [
            'ask' => $this->request->getPost('ask'),
            'question' => $this->request->getPost('question')
        ];

        $model->update($id_faq, $data); // No need to pass 'where' array

        return redirect()->to(site_url('FAQ'));
    }
}
