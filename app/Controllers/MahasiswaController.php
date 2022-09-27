<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa; 
class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();
        $data = ['title' => 'Mahasiswa',
        'mahasiswa' => $mahasiswa,            
        ];
<<<<<<< HEAD
    return view('template/header', $data)
            . view('mahasiswa/list', $data)
            . view('template/footer');
=======
<<<<<<< HEAD
    return view('template/header', $data)
            . view('mahasiswa/list', $data)
            . view('template/footer');
=======
    return view('mahasiswa/list', $data);
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
    }

    public function create(){
        $data = [
            'title' => 'Create Mahasiswa',         
        ];
<<<<<<< HEAD
    return view('template/header', $data)
            . view('mahasiswa/create', $data)
            . view('template/footer');
=======
<<<<<<< HEAD
    return view('template/header', $data)
            . view('mahasiswa/create', $data)
            . view('template/footer');
=======
    return view('mahasiswa/create', $data);
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
    }

    public function store(){
        if(!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required'
        ])){
            return redirect()->to('/create');
        }
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        
        return redirect()->to('/mahasiswa');
    }

    public function edit($id){
        $mahasiswaModel = new Mahasiswa();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d81f7ee (comit)
        $mahasiswa = $mahasiswaModel->find($id);
        $data = [
            'title' => 'Edit Mahasiswa'
        ];
        return view('template/header', $data)
            . view('mahasiswa/edit', $mahasiswa)
            . view('template/footer');
<<<<<<< HEAD
=======
=======
        $data = [
            'mahasiswa' => $mahasiswaModel->find($id),
            'title' => 'Edit Mahasiswa'
        ];
        return view('mahasiswa/edit', $data);
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
    }

    public function update($id){
        if(!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required'
        ])){
            return redirect()->to('/edit/'.$id);
        }
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');
    }
}