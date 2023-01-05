<?php

namespace Database\Seeders;

use App\Models\TiposVeiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposVeiculo::factory()->count(10)->create();
    }
}
