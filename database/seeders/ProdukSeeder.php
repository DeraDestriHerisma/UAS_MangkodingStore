<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'foto' => '',
            'title' => 'SOFA',
            'harga' => '5000000',
            'deskripsi_product' => 'sofa ini merupakan sofa termahal',
        ]);
    }
}
