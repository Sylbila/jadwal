<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller3 extends Controller
{
    public function getData()
    { 
        $data = [
            'nim' => '2201010695',
            'nama' => 'Sylbila Najla Sobia Naim',
            'jurusan' => 'TI-MTI',
            'alamat' => 'Tabanan, Bali',
            'no_hp' => '08983117452',
            'hobi' => 'listening music',
            'moto_hidup' => 'Do your Best, Life Is Short.',
        ];

    return view('contentuts1', compact('data'));
    }
    public function show()
    {
        $data = [
            [
                'No'=>'1',
                'kode_mk'=>'BTIW-008',
                'matkul' => 'analisa dan desain sistem informasi',
                'sks'=>'3',
                'kelas' => 'sabtu 10.00 - 12.20 W R401',
                'enrollment' => 'Y72x69',
                'dosen'=>'Aniek Suryanti Kusuma,S.Kom., M.Kom'
            ],
            [
                'No'=>'2',
                'kode_mk'=>'AIST-004',
                'matkul' => 'bahasa indonesia',
                'sks'=>'2',
                'kelas' => 'Selasa 12:20 - 14:00 F R532',
                'enrollment' => 'O80k71',
                'dosen'=>'Drs. I Made Arga,M.Ag'
            ],
            [
                'No'=>'3',
                'kode_mk'=>'BTIW-019',
                'matkul' => 'Bisnis Berbasis Teknologi',
                'sks'=>'2',
                'kelas' => 'Sabtu 13:10 - 14:50 W R401',
                'enrollment' => 'J74m77',
                'dosen'=>'Ayu Gede Chrisna Udayanie, S.Pd.,M.Pd'
            ],
            [
                'No'=>'4',
                'kode_mk'=>'BTIW-020',
                'matkul' => 'Data Integration',
                'sks'=>'2',
                'kelas' => 'Senin 07:30 - 10:00 W Lab B',
                'enrollment' => 'A81l68',
                'dosen'=>'Anak Agung Gede Bagus Ariana, S.T., M.T.'
            ],
            [
                'No'=>'5',
                'kode_mk'=>'BTIW-026',
                'matkul' => 'Jaringan Komputer Lanjut',
                'sks'=>'2',
                'kelas' => 'Senin 10:00 - 12:20 W Lab J',
                'enrollment' => 'A68k85',
                'dosen'=>'Ida Bagus Ary Indra Iswara,S.Kom.,M.Kom'
            ],
            [
                'No'=>'6',
                'kode_mk'=>'BTIW-030',
                'matkul' => 'Pemrograman Web Framework',
                'sks'=>'2',
                'kelas' => 'Kamis 10:00 - 12:20 W Lab C',
                'enrollment' => 'V89c83',
                'dosen'=>'I Komang Arya Ganda Wiguna, S.Kom., M.Cs.'
            ],
            [
                'No'=>'7',
                'kode_mk'=>'AIST-003',
                'matkul' =>'Pendidikan Kewarganegaraan',
                'sks'=>'2',
                'kelas' => 'Rabu 19:00 - 20:40 E R303',
                'enrollment' => 'B71c78',
                'dosen'=>'Ni Kadek Puspita Dewi, S.Pd., M.Pd'
            ],
            [
                'No'=>'8',
                'kode_mk'=>'BTIW-031',
                'matkul' => 'Pengantar Akuntansi',
                'sks'=>'3',
                'kelas' => 'Jumat 09:10 - 11:40 W R4031',
                'enrollment' => 'E70l88',
                'dosen'=>'Putu Apriayani P, S.E.,M.Si'
            ],
            [
                'No'=>'9',
                'kode_mk'=>'BTIW-008',
                'matkul' => 'Tata Kelola dan Audit Teknologi Informasi',
                'sks'=>'3',
                'kelas' => 'Kamis 13:10 - 15:40 W R512',
                'enrollment' => 'I75g90',
                'dosen'=>'Ayu Manik Dirgayusari, S.Kom., M.MT.'
            ]
        ];

    return view('contentuts2', compact('data'));
    }
}
