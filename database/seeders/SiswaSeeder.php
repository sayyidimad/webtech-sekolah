<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            [
                'nis' => '0102',
                'nama' => 'Gabriel',
                'umur' => 18,
                'alamat' => 'Sidoarjo',
                'no_telp' => '081135',
            ],
            [
                'nis' => '0103',
                'nama' => 'Dilla',
                'umur' => 16,
                'alamat' => 'Mojokerto',
                'no_telp' => '081221'
            ],
            [
                'nis' => '0104',
                'nama' => 'Hanna',
                'umur' => 22,
                'alamat' => 'Kediri',
                'no_telp' => '0813511'
            ]
        ]);
    }
}
