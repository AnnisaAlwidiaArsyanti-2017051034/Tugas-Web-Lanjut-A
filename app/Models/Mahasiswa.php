<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
<<<<<<< HEAD
    protected $allowedFields = ['npm', 'nama', 'alamat'];
=======
<<<<<<< HEAD
    protected $allowedFields = ['npm', 'nama', 'alamat'];
=======
    protected $allowedFields = ['npm', 'nama', 'alamat', 'deskripsi'];
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
}
