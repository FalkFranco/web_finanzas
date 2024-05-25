<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entidad;
use App\Models\Resumen;
use App\Models\Gasto;


class DatabaseSeeder extends Seeder
{
    public function run()
    {


        $this->call([
            TipoEntidadSeeder::class,
            EntidadSeeder::class,
            TipoTarjetaSeeder::class,
            TarjetaSeeder::class,
            ResumenSeeder::class,
            GastoSeeder::class,
        ]);
    }
}
