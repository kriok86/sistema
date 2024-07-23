<?php

namespace Database\Seeders;

use App\Models\Informe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $informe = [
            
            '1',
            '2',
            '3',
            '4',
            '5',
        ];

        foreach ($informe as $informe) {
            Informe::create([
                'value' => $informe,
            ]);
        }
    }
}
