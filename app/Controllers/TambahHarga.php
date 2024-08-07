<?php

namespace App\Controllers;

use App\Models\M_harga;
use CodeIgniter\Controller;

class TambahHarga extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new M_harga();
                $data['harga'] = $model->findAll();
                return view('admin/v_tambah_harga', $data);
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
    $model = new M_harga();

    // Mendapatkan nilai harga dari input form
    $hargaInput = $this->request->getPost('harga');

    // Menghapus karakter selain angka
    $hargaNumerik = preg_replace('/\D/', '', $hargaInput);


    // Menggabungkan semua data ke dalam array
    $hargadata = [
        'nama' => $this->request->getPost('nama'),
        'detail' => $this->request->getPost('detail'),
        'harga' => $hargaNumerik,  // Menyimpan harga yang sudah diformat
        'estimasi' => $this->request->getPost('estimasi'),
    ];

    // Menyimpan data ke database
    $model->insert($hargadata);

    // Mengarahkan kembali ke halaman daftar harga
    return redirect()->to(site_url('Harga'));
}

}
