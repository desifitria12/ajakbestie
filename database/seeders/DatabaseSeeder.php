<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        $this->call([
            UsersTableSeeder::class,
            DinasSeeder::class,
            FaktorJabatanSeeder::class,
            KopetensiManajerialSeeder::class,
            //Data Jabatan Pelaksana
            PelaksanaJabatanSeeder::class,
            // PelaksanaFaktorSeeder::class,
            // PelaksanaTugasPokokSeeder::class,
            // PelaksanaBahanKerjaSeeder::class,
            // PelaksanaPerangkatKerjaSeeder::class,
            // PelaksanaLingkunganKerjaSeeder::class,
            // PelaksanaSyaratJabatanSeeder::class,
            // PelaksanaKopetensiSeeder::class,
            //Data Jabatan Fungsional
            FungsionalJabatanSeeder::class,
            // FungsionalFaktorSeeder::class,
            // FungsionalTugasPokokSeeder::class,
            // FungsionalBahanKerjaSeeder::class,
            // FungsionalPerangkatKerjaSeeder::class,
            // FungsionalLingkunganKerjaSeeder::class,
            // FungsionalSyaratJabatanSeeder::class,
            // FungsionalKompetensiSeeder::class,
            //Data Jabatan Struktural
            StrukturalJabatanSeeder::class,
            // StrukturalFaktorSeeder::class,
            // StrukturalTugasPokokSeeder::class,
            // StrukturalBahanKerjaSeeder::class,
            // StrukturalPerangkatKerjaSeeder::class,
            // StrukturalLingkunganKerjaSeeder::class,
            // StrukturalSyaratJabatanSeeder::class,
            // StrukturalKompetensiSeeder::class,

        ]);
    }
}
