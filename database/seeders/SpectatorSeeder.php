<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Spectator;

class SpectatorSeeder extends Seeder
{
    public function run()
    {
        $spectators = [
            ['id' => 1, 'sname' => 'salah ben sarar', 'male' => 1, 'haspass' => 0],
            ['id' => 2, 'sname' => 'Kertész Bence', 'male' => -1, 'haspass' => 0],
            ['id' => 3, 'sname' => 'Molnár Alex', 'male' => -1, 'haspass' => -1],
            ['id' => 4, 'sname' => 'Bóka Nátán', 'male' => -1, 'haspass' => -1],
            ['id' => 5, 'sname' => 'Réti Dániel', 'male' => -1, 'haspass' => -1],
            ['id' => 6, 'sname' => 'Varga Zsolt', 'male' => -1, 'haspass' => 0],
            ['id' => 7, 'sname' => 'Elek Miklós', 'male' => -1, 'haspass' => 0],
            ['id' => 8, 'sname' => 'Balázs Domonkos', 'male' => -1, 'haspass' => 0],
            ['id' => 9, 'sname' => 'Tóth Ákos', 'male' => -1, 'haspass' => -1],
            ['id' => 10, 'sname' => 'Sári Péter', 'male' => -1, 'haspass' => 0],
            ['id' => 11, 'sname' => 'Kiss Dorina', 'male' => 0, 'haspass' => -1],
            ['id' => 12, 'sname' => 'Csuka Beáta', 'male' => 0, 'haspass' => 0],
            ['id' => 13, 'sname' => 'Kun Tamás', 'male' => -1, 'haspass' => -1],
            ['id' => 14, 'sname' => 'Zsolczai Balázs', 'male' => -1, 'haspass' => -1],
            ['id' => 15, 'sname' => 'Bertók Dániel', 'male' => -1, 'haspass' => -1],
            ['id' => 16, 'sname' => 'Fehér Orsolya', 'male' => 0, 'haspass' => -1],
            ['id' => 17, 'sname' => 'Márton Hunor', 'male' => -1, 'haspass' => 0],
            ['id' => 18, 'sname' => 'Vass András', 'male' => -1, 'haspass' => 0],
            ['id' => 19, 'sname' => 'Szepes Edit', 'male' => 0, 'haspass' => 0],
            ['id' => 20, 'sname' => 'Kónya Barbara', 'male' => 0, 'haspass' => 0],
            ['id' => 21, 'sname' => 'Tóth Luca', 'male' => 0, 'haspass' => 0],
            ['id' => 23, 'sname' => 'Oláh Soma', 'male' => -1, 'haspass' => 0],
            ['id' => 24, 'sname' => 'Bajnai Krisztián', 'male' => -1, 'haspass' => 0],
            ['id' => 25, 'sname' => 'Csáki Márton', 'male' => -1, 'haspass' => 0],
            ['id' => 26, 'sname' => 'Deák István', 'male' => -1, 'haspass' => 0],
            ['id' => 27, 'sname' => 'Török Róbert', 'male' => -1, 'haspass' => 0],
            ['id' => 28, 'sname' => 'Bogdándi Dávid', 'male' => -1, 'haspass' => -1],
            ['id' => 29, 'sname' => 'Szolga Ádám', 'male' => -1, 'haspass' => 0],
            ['id' => 30, 'sname' => 'Molnár Márton', 'male' => -1, 'haspass' => -1],
            ['id' => 31, 'sname' => 'Árva Ákos', 'male' => -1, 'haspass' => 0],
            ['id' => 32, 'sname' => 'Schiss Bence', 'male' => -1, 'haspass' => -1],
            ['id' => 33, 'sname' => 'Szűcs Kornél', 'male' => -1, 'haspass' => 0],
            ['id' => 34, 'sname' => 'Stephe', 'male' => 1, 'haspass' => 1],
        ];

        foreach ($spectators as $spectator) {
            Spectator::create($spectator);
        }
    }
}
