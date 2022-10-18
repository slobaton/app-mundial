<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StadiumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert([
            ['name' => 'Estadio Internacional Khalifa'],
            ['name' => 'Estadio Al-Bayt'],
            ['name' => 'Estadio Al-Janoub'],
            ['name' => 'Estadio Education City'],
            ['name' => 'Estadio Al-Rayyan'],
            ['name' => 'Estadio Al-Thumama'],
            ['name' => 'Estadio Ras Abu Aboud'],
            ['name' => 'Estadio Icónico de Lusail'],
        ]);
    }
}
