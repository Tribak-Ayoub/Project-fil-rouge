<?php

namespace Database\Seeders;

use App\Models\Seance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seances = [
            [
                'DateSeance' => '2025-02-15',
            ],
            [
                'DateSeance' => '2025-02-16',
            ],
            [
                'DateSeance' => '2025-02-17',
            ],
        ];
    
        foreach ($seances as $seance) {
            Seance::create($seance);
        }
    }
}
