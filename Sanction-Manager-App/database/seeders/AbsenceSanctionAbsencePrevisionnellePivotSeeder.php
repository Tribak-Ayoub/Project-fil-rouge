<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsenceSanctionAbsencePrevisionnellePivotSeeder extends Seeder
{
    public function run()
    {
        // DB::table('absence_sanction_absence_previsionnelle')->truncate();

        DB::table('absence_sanction_absence_previsionnelle')->insert([
            ['absence_id'=>1, 'sanction_absence_previsionnelle_id'=>1],
            ['absence_id'=>3, 'sanction_absence_previsionnelle_id'=>2],
        ]);
    }
}
