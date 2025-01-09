<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsenceSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Absence_Session::create([
                'date' => $faker->date(),
                'timeSlot' => $faker->time(),
            ]);
        }
    }
}
