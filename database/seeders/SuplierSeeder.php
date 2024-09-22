<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'suplier_id' => 1,
                'suplier_kode' =>'RFF',
                'suplier_nama' => 'Rafif',
                'suplier_alamat' => 'Jl. Kalpataru'
            ],
            [
                'suplier_id' => 2,
                'suplier_kode' =>'SKN',
                'suplier_nama' => 'Solikhin',
                'suplier_alamat' => 'Jl. Tunggulwulung'
            ],
            [
                'suplier_id' => 3,
                'suplier_kode' =>'GLB',
                'suplier_nama' => 'Gelby',
                'suplier_alamat' => 'Jl. Simpang Gajayana'
            ],
        ];    
        DB::table('m_suplier')->insert($data);
    }
}