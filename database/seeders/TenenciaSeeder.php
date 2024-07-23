<?php

namespace Database\Seeders;

use App\Models\tenencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenencia = [
            'Propietario',
            'Alquilada',
            'Cedida',
            'Compartida',
        ];

        foreach ($tenencia as $tenencia) {
            tenencia::create([
                'name'=>$tenencia,
            ]);
        }
    }
}
