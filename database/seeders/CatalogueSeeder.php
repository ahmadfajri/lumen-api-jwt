<?php

namespace Database\Seeders;

use App\Models\Catalogue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catalogue::create([
            'kd_product' => 'dummy01',
            'nama_product' => 'Dummy Product',
            'harga_product' => 50000,
            'slug' => 'dummy-product'
        ]);
    }
}
