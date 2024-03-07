<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Iqbal Ramadan. 
        Saya tinggal di daerah Kebon Jeruk. 
        Olahraga yang saya sukai adalah Sepak Bola";
    }
}