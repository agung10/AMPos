<?php

use Illuminate\Database\Seeder;

class PersentaseKeuntungan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('persentase_keuntungans')->truncate();

        \App\Models\PersentaseKeuntungan::insert([
            [
                'persentase_keuntungan' => '10',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
