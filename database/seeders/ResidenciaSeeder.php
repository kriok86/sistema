<?php

namespace Database\Seeders;

use App\Models\Residencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residencia = [
            'Nativo',
            'Entre 2 y 4 años',
            'Entre 5 y 9 años',
            'Mas de 10 años',
        ];

        foreach ($residencia as $residencia) {
            Residencia::create([
                'name'=>$residencia,
            ]);
        }
    }
}
