<?php

namespace Database\Seeders;

use App\Models\SanctionAbsence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanctionAbsencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sanctions = [
            [
                'date_debut' => '2025-01-01',
                'statut' => 'En cours',
                'apprenant_id' => 3,
                'regle_id' => 1,
            ],
            [
                'date_debut' => '2025-02-01',
                'statut' => 'Terminé',
                'apprenant_id' => 2,
                'regle_id' => 2,
            ]
        ];
    
        foreach ($sanctions as $sanction) {
            SanctionAbsence::create($sanction);
        }
    }
}
