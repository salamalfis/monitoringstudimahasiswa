<?php

namespace Database\Seeders;

use Faker\Generator;
use App\Traits\GenUid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use PhpParser\Node\Stmt\Foreach_;

class MataKuliahPilihan extends Seeder
{

    use GenUid;
    /**
     * Run the database seeds.
     */

   
    public function run(): void
    {
        $uid = $this->Uid();
        $matakuliahpilihan =[
            
            // [
            //     'id' =>$uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4G3',
            //     'namamatakuliah' => 'Penambangan Data',
            //     'namamatakuliahenglish' => 'Data Mining',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' =>   $uid ,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4H3',
            //     'namamatakuliah' => 'Analitika Data',
            //     'namamatakuliahenglish' => 'Data Analytics',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4I3',
            //     'namamatakuliah' => 'Penambangan Proses',
            //     'namamatakuliahenglish' => 'Process Mining',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4J3',
            //     'namamatakuliah' => 'Pengelolaan Big Data',
            //     'namamatakuliahenglish' => 'Big Data Management',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4K3',
            //     'namamatakuliah' => 'Pengantar Internet of Things',
            //     'namamatakuliahenglish' => 'Introduction to Internet of Things',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4L3',
            //     'namamatakuliah' => 'Bisnis Digital',
            //     'namamatakuliahenglish' => 'Digital Business',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4M3',
            //     'namamatakuliah' => 'Pengembangan Sistem Cerdas',
            //     'namamatakuliahenglish' => 'Intelligent System Development',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4N3',
            //     'namamatakuliah' => 'Pengembangan Aplikasi Bergerak	Mobile',
            //     'namamatakuliahenglish' => 'Application Development',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4O3',
            //     'namamatakuliah' => 'Manajemen Risiko Teknologi Informasi',
            //     'namamatakuliahenglish' => 'IT Risk Management',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4P3',
            //     'namamatakuliah' => 'Teknik Audit dan Kontrol Sistem Informasi',
            //     'namamatakuliahenglish' => 'Audit Techniques and Information System Controls',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI413',
            //     'namamatakuliah' => 'Manajemen Data Enterprise',
            //     'namamatakuliahenglish' => 'Enterprise Data Management',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4R3',
            //     'namamatakuliah' => 'Implementasi Arsitektur Enterprise',
            //     'namamatakuliahenglish' => 'Implementation of Enterprise Architecture',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            //     ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4S3',
            //     'namamatakuliah' => 'Manajemen Proyek Teknologi Informasi',
            //     'namamatakuliahenglish' => 'Information Technology Project Management',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI423',
            //     'namamatakuliah' => 'Modifikasi Sistem Enterprise',
            //     'namamatakuliahenglish' => 'Modification of Enterprise System',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI433',
            //     'namamatakuliah' => 'Penerapan Sistem Enterprise Terintegrasi',
            //     'namamatakuliahenglish' => 'Implementation of Integrated Enterprise System',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI443',
            //     'namamatakuliah' => 'Adopsi Teknologi Informasi',
            //     'namamatakuliahenglish' => 'Information Technology Adoption',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI453',
            //     'namamatakuliah' => 'Sistem Manajemen Hubungan Pelanggan',
            //     'namamatakuliahenglish' => 'Customer Relationship Management System',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4W3',
            //     'namamatakuliah' => 'Manajemen Layanan Jaringan',
            //     'namamatakuliahenglish' => 'Network Service Management',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4X3',
            //     'namamatakuliah' => 'Jaringan Komputer Enterprise',
            //     'namamatakuliahenglish' => 'Enterprise Computer Network',
            //     'sks' => 3,
            //     'semester' => 7,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4Y3',
            //     'namamatakuliah' => 'Forensika Komputer',
            //     'namamatakuliahenglish' => 'Computer Forensics',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],
            // [
            //     'id' => $uid,
            //     'kategori' => 'MKPP',
            //     'kode' => 'ISI4Z3',
            //     'namamatakuliah' => 'Infrastruktur Awan',
            //     'namamatakuliahenglish' => 'Cloud Infrastructure',
            //     'sks' => 3,
            //     'semester' => 8,
            //     'created_at' => now(),
            // ],

        ];

        DB::table('matkul_pilihan')->insert($matakuliahpilihan);
        
    }


        
}
