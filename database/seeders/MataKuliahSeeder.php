<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            $matakuliah= [
                [
                    'kategori' => 'MKWU',
                    'kode'=>'UWI1C2',
                    'namamatakuliah'=> 'Literasi Teknologi',
                    'namamatakuliahenglish'=> 'Technology Literacy',
                    'sks'=>2,
                    'semester'=>1,
                    'created_at' => now(),
            ],
                [

                    'kategori' => 'MKWU',
                    'kode'=>'UWI1E1',
                    'namamatakuliah'=> 'Pembentukan Karakter',
                    'namamatakuliahenglish'=> 'Character Building',
                    'sks'=>1,
                    'semester'=>1,
                    'created_at' => now(),
            ],
                [

                    'kategori' => 'MKWU',
                    'kode'=>'UWJXA2',
                    'namamatakuliah'=> 'Bahasa Inggris',
                    'namamatakuliahenglish'=> 'English',
                    'sks'=> 2,
                    'semester'=>1,
                    'created_at' => now(),
            ],
                [

                    'kategori' => 'MKWU',
                    'kode'=>'UWI1D2',
                    'namamatakuliah'=> 'Kepemimpinan dan Komunikasi Interpersonal',
                    'namamatakuliahenglish'=> 'Leadership and Interpersonal Communication',
                    'sks'=>2,
                    'semester'=>2,
                    'created_at' => now(),
            ],
                [

                    'kategori' => 'MKWU',
                    'kode'=>'UWJXF2',
                    'namamatakuliah'=> 'Kewirausahaan',
                    'namamatakuliahenglish'=> 'Enterpreneurship',
                    'sks'=>2,
                    'semester'=>7,
                    'created_at' => now(),

            ],

            ];

    DB::table('master_matakuliah')->insert($matakuliah);
        }
}

