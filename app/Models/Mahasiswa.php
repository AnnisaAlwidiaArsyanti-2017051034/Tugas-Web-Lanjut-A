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
<<<<<<< HEAD
    protected $allowedFields = ['npm', 'nama', 'alamat'];
=======
<<<<<<< HEAD
    protected $allowedFields = ['npm', 'nama', 'alamat'];
=======
    protected $allowedFields = ['npm', 'nama', 'alamat', 'deskripsi'];
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
    protected $allowedFields = ['npm', 'nama', 'alamat'];
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
}
