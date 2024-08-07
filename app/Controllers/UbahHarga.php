<?php

namespace App\Controllers;

use App\Models\M_harga;
use CodeIgniter\Controller;

class UbahHarga extends BaseController
{
    public function index($id_harga)
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_harga();
                $data['harga'] = $model->gethargaById($id_harga);

                return view('admin/v_ubah_harga', $data);
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
        $model = new M_harga();
        // Mendapatkan nilai harga dari input form
        $hargaInput = $this->request->getPost('harga');

        // Menghapus karakter selain angka
        $hargaNumerik = preg_replace('/\D/', '', $hargaInput);

        $id_harga = $this->request->getPost('id_harga'); // Use getPost instead of getVar
        $data = [
            'nama' => $this->request->getPost('nama'),
            'detail' => $this->request->getPost('detail'),
            'harga' => $hargaNumerik,  // Menyimpan harga yang sudah diformat
            'estimasi' => $this->request->getPost('estimasi'),
        ];

        $model->update($id_harga, $data); // No need to pass 'where' array

        return redirect()->to(site_url('Harga'));
    }
}
