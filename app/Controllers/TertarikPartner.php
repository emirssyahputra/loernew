<?php

namespace App\Controllers;
use App\Models\M_mitra;

class TertarikPartner extends BaseController
{
    public function index()
    {

        return view('v_tertarikpartner');
    }
    public function save()
    {
        // Inisialisasi model
        $mitramodel = new M_mitra();

        // Ambil data dari form
        $data = [
            'email'     => $this->request->getPost('email'),
            'nama'      => $this->request->getPost('nama'),
            'hp'        => $this->request->getPost('hp'),
            'alamat'    => $this->request->getPost('alamat'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'info'      => $this->request->getPost('info'),
        ];

        // Simpan data ke database
        if ($mitramodel->insert($data)) {
            return redirect()->to('TertarikPartner')->with('success', 'Data berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim data.')->withInput();
        }
    }
}
