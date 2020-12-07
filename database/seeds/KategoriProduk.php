<?php

use Illuminate\Database\Seeder;

class KategoriProduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kategoris')->truncate();

        \App\Models\Kategori::insert([
            [
                'kategori' => 'Makanan',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
