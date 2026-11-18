<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Zulfa Urbun',
            'nim' => '13242520092',
            'prodi' => 'Ilmu Kelautan',
            'email' => 'zlfabn@gmail.com',
            'no_hp' => '085145293746',
            'foto' => 'foto/hld.jpg',
        ]);
    }
}