<?php

use Illuminate\Database\Seeder;

class Ppn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ppns')->truncate();

        \App\Models\Ppn::insert([
            [
                'stok_minimum' => '1',
                'ppn' => '10',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
