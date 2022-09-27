<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
            'created_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
