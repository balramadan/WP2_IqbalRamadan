<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

namespace App\Controllers;

class Matakuliah extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        $rules = [
            'kode' => [
                'label' => 'Kode Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah harus diisi',
                    'min_length' => 'Kode terlalu pendek'
                ]
            ],
            'nama' => [
                'label' => 'Nama Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Matakuliah harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            return view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks'),
            ];

            return view('view-data-matakuliah', $data);
        }
    }
}