<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $softwareModel = model('App\Models\SoftwareModel', false);
        helper('date');

        $dataSoftware['dataSoftware'] = $softwareModel->findAll();

        $data = [
            "judul_halaman" => "home",
            "halaman_aktif" => "index"
        ];
        echo view('/template/header.php');
        echo view('/template/body.php', $dataSoftware);
        echo view('/template/footer.php');
    }
}
