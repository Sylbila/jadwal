<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mhs2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[ //array//
        [
            'nim' => '2201010695',
            'nama' => 'sylbila najla',
            'prodi' => 'teknik informatika'
        ],
        [
            'nim' => '2201010666',
            'nama' => 'resita ramadhania putri',
            'prodi' => 'teknik informatika'
        ],
        [
            'nim' => '2201010777',
            'nama' => 'veronika novia hugo',
            'prodi' => 'teknik informatika'
        ]
        ];

        DB::table('Mhs')->insert($data);
    }
}
