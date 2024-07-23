<?php

namespace Database\Seeders;

use App\Models\Obra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obra = [
            'Planos',
            'Prepago de vivienda',
            'Nada',
        ];

        foreach ($obra as $obra) {
            Obra::create([
                'name' => $obra,
            ]);
        }
    }
}
