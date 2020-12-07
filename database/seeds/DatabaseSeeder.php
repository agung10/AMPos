<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(Currency::class);
        $this->call(InformasiToko::class);
        $this->call(KategoriProduk::class);
        $this->call(PersentaseKeuntungan::class);
        $this->call(Ppn::class);
        $this->call(Unit::class);
    }
}
