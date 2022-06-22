<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pemilik::firstOrCreate([
            "nama" => "Ahmad Subarjo",
            "alamat" =>"Jalan Kabut, Kecamatan Jebres, Kota Surakarta",
            "nik" => "776666",
            "no_wa" => "087765544444",
            "no_telp"=> "087765544444",
            "created_by" => "Latifah"
        ]);
        Pemilik::firstOrCreate([
            "nama" => "Gathotkaca",
            "alamat" =>"Jalan Surya, Kecamatan Jebres, Kota Surakarta",
            "nik" => "776666",
            "no_wa" => "087765544444",
            "no_telp"=> "087765544444",
            "created_by" => "Latifah"
        ]);
    }
}
