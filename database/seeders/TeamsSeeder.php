<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupA = Group::where('name', 'A')->first();
        $groupB = Group::where('name', 'B')->first();
        $groupC = Group::where('name', 'C')->first();
        $groupD = Group::where('name', 'D')->first();
        $groupE = Group::where('name', 'E')->first();
        $groupF = Group::where('name', 'F')->first();
        $groupG = Group::where('name', 'G')->first();
        $groupH = Group::where('name', 'H')->first();

        DB::table('soccer_teams')->insert([
            [
                'name' => 'Qatar',
                'flag' => '/images/flags/QAT.png',
                'group_id' => $groupA->id
            ],
            [
                'name' => 'Ecuador',
                'flag' => '/images/flags/ECU.png',
                'group_id' => $groupA->id
            ],
            [
                'name' => 'Senegal',
                'flag' => '/images/flags/SEN.png',
                'group_id' => $groupA->id
            ],
            [
                'name' => 'Países Bajos',
                'flag' => '/images/flags/NED.png',
                'group_id' => $groupA->id
            ],
            [
                'name' => 'Inglaterra',
                'flag' => '/images/flags/ENG.png',
                'group_id' => $groupB->id
            ],
            [
                'name' => 'RI de Irán',
                'flag' => '/images/flags/IRN.png',
                'group_id' => $groupB->id
            ],
            [
                'name' => 'EEUU',
                'flag' => '/images/flags/USA.png',
                'group_id' => $groupB->id
            ],
            [
                'name' => 'Gales',
                'flag' => '/images/flags/WAL.png',
                'group_id' => $groupB->id
            ],
            [
                'name' => 'Argentina',
                'flag' => '/images/flags/ARG.jpg',
                'group_id' => $groupC->id
            ],
            [
                'name' => 'Arabia Saudí',
                'flag' => '/images/flags/KSA.png',
                'group_id' => $groupC->id
            ],
            [
                'name' => 'México',
                'flag' => '/images/flags/MEX.jpg',
                'group_id' => $groupC->id
            ],
            [
                'name' => 'Polonia',
                'flag' => '/images/flags/POL.png',
                'group_id' => $groupC->id
            ],
            [
                'name' => 'Francia',
                'flag' => '/images/flags/FRA.png',
                'group_id' => $groupD->id
            ],
            [
                'name' => 'Dinamarca',
                'flag' => '/images/flags/DEN.png',
                'group_id' => $groupD->id
            ],
            [
                'name' => 'Túnez',
                'flag' => '/images/flags/TUN.png',
                'group_id' => $groupD->id
            ],
            [
                'name' => 'Australia',
                'flag' => '/images/flags/AUS.jpg',
                'group_id' => $groupD->id
            ],
            [
                'name' => 'España',
                'flag' => '/images/flags/ESO.jpg',
                'group_id' => $groupE->id
            ],
            [
                'name' => 'Alemania',
                'flag' => '/images/flags/GER.webp',
                'group_id' => $groupE->id
            ],
            [
                'name' => 'Japón',
                'flag' => '/images/flags/JPN.png',
                'group_id' => $groupE->id
            ],
            [
                'name' => 'Costa Rica',
                'flag' => '/images/flags/CRC.webp',
                'group_id' => $groupE->id
            ],
            [
                'name' => 'Bélgica',
                'flag' => '/images/flags/BEL.png',
                'group_id' => $groupF->id
            ],
            [
                'name' => 'Canadá',
                'flag' => '/images/flags/CAN.png',
                'group_id' => $groupF->id
            ],
            [
                'name' => 'Marruecos',
                'flag' => '/images/flags/MAR.webp',
                'group_id' => $groupF->id
            ],
            [
                'name' => 'Croacia',
                'flag' => '/images/flags/CRO.png',
                'group_id' => $groupF->id
            ],
            [
                'name' => 'Brasil',
                'flag' => '/images/flags/BRA.webp',
                'group_id' => $groupG->id
            ],
            [
                'name' => 'Serbia',
                'flag' => '/images/flags/SRB.webp',
                'group_id' => $groupG->id
            ],
            [
                'name' => 'Suiza',
                'flag' => '/images/flags/SUI.webp',
                'group_id' => $groupG->id
            ],
            [
                'name' => 'Camerún',
                'flag' => '/images/flags/CMR.webp',
                'group_id' => $groupG->id
            ],
            [
                'name' => 'Portugal',
                'flag' => '/images/flags/POR.webp',
                'group_id' => $groupH->id
            ],
            [
                'name' => 'Ghana',
                'flag' => '/images/flags/GHA.webp',
                'group_id' => $groupH->id
            ],
            [
                'name' => 'Uruguay',
                'flag' => '/images/flags/URU.webp',
                'group_id' => $groupH->id
            ],
            [
                'name' => 'República de Corea',
                'flag' => '/images/flags/KOR.webp',
                'group_id' => $groupH->id
            ],
        ]);
    }
}
