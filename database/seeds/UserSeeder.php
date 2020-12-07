<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        \App\User::insert([
            [
                "name"            => "adminutama",
                "username"        => "adminutama",
                "email"           => "adminutama@gmail.com",
                "password"        => Hash::make("123321"),
                "tanggal_lahir"   => "2001-05-08",
                // "foto"         => ""
                "alamat"          => "Jalan HM Sabar RT03/001",
                "level"           => "AdminUtama",
                "created_at"      => \Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "name"            => "admingudang",
                "username"        => "admingudang",
                "email"           => "admingudang@gmail.com",
                "password"        => Hash::make("123321"),
                "tanggal_lahir"   => "2001-05-08",
                // "foto"         => ""
                "alamat"          => "Jalan HM Sabar RT03/001",
                "level"           => "AdminGudang",
                "created_at"      => \Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "name"            => "kasir",
                "username"        => "kasir",
                "email"           => "kasir@gmail.com",
                "password"        => Hash::make("123321"),
                "tanggal_lahir"   => "2001-05-08",
                // "foto"         => ""
                "alamat"          => "Jalan HM Sabar RT03/001",
                "level"           => "Kasir",
                "created_at"      => \Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
