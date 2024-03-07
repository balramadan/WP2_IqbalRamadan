<?php
namespace App\Models;

use CodeIgniter\Model;

class Model_Latihan1 extends Model
{
    // Membuat variabel untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    // Method penjumlahan
    public function penjumlahan($n1, $n2)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;

        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}