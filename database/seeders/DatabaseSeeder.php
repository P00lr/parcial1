<?php

namespace Database\Seeders;

use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\User;
use GuzzleHttp\Promise\Create;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Producto::factory(50)->create();
       Empleado::factory(50)->create();
       Cliente::factory(50)->create();
    }
}
