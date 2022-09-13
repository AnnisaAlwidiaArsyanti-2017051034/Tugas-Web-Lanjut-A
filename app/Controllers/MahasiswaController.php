<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa; 
class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswamodels = new Mahasiswa();
        $mahasiswa = $mahasiswamodels->findAll();
        $data = ['title' => 'Mahasiswa',
        'mahasiswa' => $mahasiswa,            
        ];
    return view('template/header', $data)
            . view('mahasiswa/list', $data)
            . view('template/footer');
    }

    public function create(){
        $data = [
            'title' => 'CreateMahasiswa',         
        ];
    return view('template/header', $data)
            . view('mahasiswa/create', $data)
            . view('template/footer');
    }
}
