<?php
namespace App\Controllers;

use App\Models\Model_Latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function jumlah($n1 = null, $n2 = null)
    {
        $modellatihan1 = new Model_Latihan1();
        $hasil = $modellatihan1->penjumlahan($n1, $n2);
        echo "Hasil penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }
}