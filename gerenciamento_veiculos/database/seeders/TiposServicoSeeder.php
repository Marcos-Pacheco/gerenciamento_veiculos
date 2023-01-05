<?php

namespace Database\Seeders;

use App\Models\TiposServico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposServico::factory()->count(10)->create();
    }
}
