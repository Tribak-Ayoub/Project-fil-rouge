<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsenceSanctionAbsencePivotSeeder extends Seeder
{
    public function run()
    {
        // DB::table('absence_sanction_absence')->truncate();

        DB::table('absence_sanction_absence')->insert([
            ['absence_id'=>1, 'sanction_absence_id'=>1],
            ['absence_id'=>2, 'sanction_absence_id'=>1],
            ['absence_id'=>3, 'sanction_absence_id'=>2],
            ['absence_id'=>4, 'sanction_absence_id'=>2],
        ]);
    }
}
