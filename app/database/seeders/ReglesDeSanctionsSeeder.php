<?php

namespace Database\Seeders;

use App\Models\ReglesDeSanction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReglesDeSanctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regles = [
            [
                'titre' => 'Règle 1',
                'description' => 'Description de la règle 1',
                'absences_max' => 3,
                'penalite' => 'Avertissement',
                'seuil_de_notification' => 2,
                'duree' => 3,
                'note' => 'Note optionnelle',
            ],
            [
                'titre' => 'Règle 2',
                'description' => 'Description de la règle 2',
                'absences_max' => 5,
                'penalite' => 'Suspension',
                'seuil_de_notification' => 3,
                'duree' => 10,
            ],
            [
                'titre' => 'Règle 3',
                'description' => 'Description de la règle 3',
                'absences_max' => 10,
                'penalite' => 'Exclusion',
                'seuil_de_notification' => 5,
                'duree' => 120,
                'note' => NULL,
            ],
        ];

        foreach ($regles as $regle) {
            ReglesDeSanction::create($regle);
        }
    }
}
