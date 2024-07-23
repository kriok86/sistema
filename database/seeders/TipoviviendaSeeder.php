<?php

namespace Database\Seeders;

use App\Models\Tipovivienda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoviviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vivienda = [
            'Local adaptado',
            'Vivienda precaria',
            'Casa o Dpto',
        ];

        foreach ($vivienda as $vivienda) {
            Tipovivienda::create([
                'name'=>$vivienda,
            ]);
        }
    }
}
