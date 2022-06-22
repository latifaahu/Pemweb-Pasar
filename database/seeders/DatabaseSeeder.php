<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasar;
use App\Models\Pengelola;
use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Klewer",
            "alamat" =>"Jalan DR. Radjiman No.5A, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Antik Triwindu",
            "alamat" =>"Jalan Diponegoro, Kecamatan Banjarsari, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Gede Harjonagoro",
            "alamat" =>"Desa Sudiroprajan, Kecamatan Jebres, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Kerajinan Alun-Alun Utara",
            "alamat" =>"Desa Kauman, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);
        Pasar::firstOrCreate([
            "nama_pasar" => "Pasar Klithikan Notohardjo",
            "alamat" =>"Jalan Sungai Serang I No.313, Kecamatan Pasar Kliwon, Kota Surakarta",
            "created_by" => "Latifah"
        ]);

        Pengelola::firstOrCreate([
            "user_id" => 1,
            "pasar_id" => 1,
            "created_by" => "Latifah"
        ]);

        Pengelola::firstOrCreate([
            "user_id" => 2,
            "pasar_id" => 3,
            "created_by" => "Latifah"
        ]);

        $this->call([
            PemilikSeeder::class,
        ]);
    }
}
