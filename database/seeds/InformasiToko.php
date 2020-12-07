<?php

use Illuminate\Database\Seeder;

class InformasiToko extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('informasi_tokos')->truncate();

        \App\Models\InformasiToko::insert([
            [
                'nama' => 'SMKN 10 Jakarta',
                'alamat' => 'Jl. Mayjen Soetoyo, Cawang, Kramatjati, RT.2/RW.9, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630',
                'telepon' => '(021) 8091773',
                'kode_pos' => 13360,
                'Keterangan' => "Aplikasi POS",
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
