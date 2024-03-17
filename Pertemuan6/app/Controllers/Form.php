<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        return view('view-form-input');
    }

    public function cetak()
    {
        $rules = [
            'nis' => [
                'label' => 'Nomor Induk Siswa',
                'rules' => 'required|max_length[10]',
                'errors' => [
                    'required' => 'NIS harus diisi',
                    'max_length' => 'NIS terlalu panjang'
                ]
            ],
            'nama' => [
                'label' => 'Nama Siswa',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ],
            'kelas' => [
                'label' => 'Kelas Siswa',
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required' => 'Kelas harus diisi',
                    'min_length' => 'Kelas terlalu pendek'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return view('view-form-input');
        } else {
            $data = [
                'nis' => $this->request->getPost('nis'),
                'nama' => $this->request->getPost('nama'),
                'kelas' => $this->request->getPost('kelas'),
                'tanggallahir' => $this->request->getPost('tanggallahir'),
                'tempatlahir' => $this->request->getPost('tempatlahir'),
                'alamat' => $this->request->getPost('alamat'),
                'jeniskelamin' => $this->request->getPost('jeniskelamin'),
                'agama' => $this->request->getPost('agama'),
            ];

            return view('view-data-siswa', $data);
        }
    }
}