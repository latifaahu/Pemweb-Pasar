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
            TenantSeeder::class,
            PasarSeeder::class
        ]);
    }
}
