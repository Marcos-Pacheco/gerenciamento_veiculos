<?php

namespace Database\Seeders;

use App\Models\Manutencoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManutencoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manutencoes::factory()->count(10)->create();
    }
}
