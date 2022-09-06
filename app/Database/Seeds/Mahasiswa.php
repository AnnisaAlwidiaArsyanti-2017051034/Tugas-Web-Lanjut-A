<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051034',
                'nama' => 'Annisa Alwidia Arsyanti',
                'alamat' => 'Hanura',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051033',
                'nama' => 'Febrian Hasibuan',
                'alamat' => 'Serang',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051017',
                'nama' => 'Silvia Rukmana',
                'alamat' => 'Kedondong',
                'created_at' => Time::now()
            ],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
