<?php

namespace Database\Seeders;

use App\Models\Mahasiswa0252;
use Illuminate\Database\Seeder;

class MahasiswaSeeder0252 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa0252();
        $mhs1->nbi = "1461900252";
        $mhs1->nama_mhs = "Ahmad Alfianto";
        $mhs1->save();

        $mhs2 = new Mahasiswa0252();
        $mhs2->nbi = "1461900262";
        $mhs2->nama_mhs = "Alvin Firmansyah";
        $mhs2->save(); 
    }
}
