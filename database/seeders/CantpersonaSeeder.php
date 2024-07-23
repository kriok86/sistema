<?php

namespace Database\Seeders;

use App\Models\Cantpersonas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CantpersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personas=[
            'Hasta 2 personas',
            'Hasta 3 personas',
            '4 o mas personas'
        ];

        foreach ($personas as $personas) {
            Cantpersonas::create([
                'name'=> $personas,
            ]);
        }
    }
}
