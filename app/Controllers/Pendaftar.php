<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pendaftar extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
                $model = new \App\Models\M_pendaftar();
                $keyword = $this->request->getPost('pencarian');

                if (!empty($keyword)) {
                    $data['pendaftar'] = $model->get_pendaftar_by_keyword($keyword);
                } else {
                    $data['pendaftar'] = $model->get_all_pendaftar_with_job();
                }

                return view('admin/v_pendaftar', $data);
            } else {
                // Jika akses tidak sama dengan 1, lakukan logout dan redirect ke halaman login
                session()->destroy();
                return redirect()->to(site_url('login'));
            }
        } else {
            return redirect()->to(site_url('login'));
        }
    }


    public function hapus($id_form)
    {
        $model = new \App\Models\M_pendaftar();

        $pendaftar = $model->find($id_form);

        if ($pendaftar) {
            // Daftar nama field file
            $fileFields = ['surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompetensi', 'berkas_pendukung'];

            // Hapus file yang terkait
            foreach ($fileFields as $field) {
                if (isset($pendaftar[$field]) && !empty($pendaftar[$field])) {
                    $filePath = ROOTPATH . 'public/doc' . DIRECTORY_SEPARATOR . $pendaftar[$field];
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
            }

            // Hapus data pendaftar dari database
            $model->delete($id_form);

            return redirect()->to('Pendaftar')->with('success', 'Data pendaftar berhasil dihapus.');
        }
    }

    public function hapus_semua_reject()
    {
        $model = new \App\Models\M_pendaftar();

        // Ambil semua pendaftar dengan status 2
        $pendaftar_list = $model->get_pendaftar_by_status(2);

        if ($pendaftar_list) {
            // Daftar nama field file
            $fileFields = ['surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompetensi', 'berkas_pendukung'];

            foreach ($pendaftar_list as $pendaftar) {
                // Hapus file yang terkait
                foreach ($fileFields as $field) {
                    if (isset($pendaftar[$field]) && !empty($pendaftar[$field])) {
                        $filePath = ROOTPATH . 'public/doc' . DIRECTORY_SEPARATOR . $pendaftar[$field];
                        if (file_exists($filePath)) {
                            unlink($filePath);
                        }
                    }
                }

                // Hapus data pendaftar dari database
                $model->delete($pendaftar['id_form']);
            }

            return redirect()->to('Pendaftar')->with('success', 'Semua data pendaftar dengan status 2 berhasil dihapus.');
        }

        return redirect()->to('Pendaftar')->with('error', 'Tidak ada data pendaftar dengan status 2.');
    }

}
