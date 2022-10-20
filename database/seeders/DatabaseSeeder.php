<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventaris;
use App\Models\Category;
use App\Models\Lokasi;
use App\Models\Peminjaman;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'kode' => 'R001',
            'jenis' => 'Ruangan'
        ]);

        Category::create([
            'kode' => 'B002',
            'jenis' => 'Barang'
        ]);

        Inventaris::factory(10)->create();

        Lokasi::create([
            'inventaris_id' => 1,
            'nama_ruang' => 'Ruang Tata Usaha',
            'lantai' => 2,
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, error.'
        ]);

        Lokasi::create([
            'inventaris_id' => 1,
            'nama_ruang' => 'Ruang Auditorium',
            'lantai' => 4,
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, error.'
        ]);

        // Inventaris::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'lokasis_id' => 1,
        //     'peminjamen_id' => 1,
        //     'nama' => 'LCD Proyektor',
        //     'kondisi' => 'Baik'
        // ]);

        // Inventaris::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'lokasis_id' => 1,
        //     'peminjamen_id' => 1,
        //     'nama' => 'LCD Proyektor',
        //     'kondisi' => 'Baik'
        // ]);

        Peminjaman::create([
            'inventaris_id' => 1,
            'user_id' => 1,
            'nama_peminjam' => 'Mala',
            'keterangan' => 'Mata Kuliah Pembasdat',
            'alamat' => 'Jl. Sidodadi Indah I/19',
            'no_telp' => '082131060500',
            'scan_ktm' => 'blabla'
        ]);

    }
}
