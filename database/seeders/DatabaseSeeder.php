<?php

namespace Database\Seeders;

use App\Models\Jenis_asn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       Jenis_asn::insert([
            'jenis'=>'CPNS'
        ]);
               Jenis_asn::insert([
            'jenis'=>'PNS'
        ]);
               Jenis_asn::insert([
            'jenis'=>'PPPK'
        ]);       Jenis_asn::insert([
            'jenis'=>'PPPK Paruh Waktu'
        ]);
    }
}
