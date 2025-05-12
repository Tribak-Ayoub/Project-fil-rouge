<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PkgSanction\App\Models\SanctionAbsence;

class SanctionAbsencesSeeder extends Seeder
{
    public function run()
    {
        // SanctionAbsence::truncate();

        SanctionAbsence::create([
            'regle_de_sanction_id' => 1,
            'date_debut'           => now()->subDays(7),
            'date_fin'             => now(),
        ]);

        SanctionAbsence::create([
            'regle_de_sanction_id' => 2,
            'date_debut'           => now()->subDays(30),
            'date_fin'             => now()->subDays(1),
        ]);
    }
}
