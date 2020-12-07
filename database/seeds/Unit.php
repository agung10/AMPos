<?php

use Illuminate\Database\Seeder;

class Unit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->truncate();

        \App\Models\Unit::insert([
            [
                'unit' => 'Pack',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
