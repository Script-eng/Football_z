<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;

class EntrySeeder extends Seeder
{
    public function run()
    {
        $entries = [
            ['spectatorid' => 1, 'matchid' => 1, 'timestamp' => '10:10:10'],
            ['spectatorid' => 1, 'matchid' => 15, 'timestamp' => '14:18:00'],
            ['spectatorid' => 2, 'matchid' => 16, 'timestamp' => '15:44:00'],
            ['spectatorid' => 3, 'matchid' => 5, 'timestamp' => '13:17:00'],
            ['spectatorid' => 4, 'matchid' => 3, 'timestamp' => '15:36:00'],
            ['spectatorid' => 5, 'matchid' => 19, 'timestamp' => '14:38:00'],
            ['spectatorid' => 6, 'matchid' => 11, 'timestamp' => '16:08:00'],
            ['spectatorid' => 7, 'matchid' => 7, 'timestamp' => '13:00:00'],
            ['spectatorid' => 8, 'matchid' => 11, 'timestamp' => '16:42:00'],
            ['spectatorid' => 9, 'matchid' => 19, 'timestamp' => '15:16:00'],
            ['spectatorid' => 10, 'matchid' => 7, 'timestamp' => '13:26:00'],
            ['spectatorid' => 11, 'matchid' => 11, 'timestamp' => '11:11:00'],
            ['spectatorid' => 11, 'matchid' => 13, 'timestamp' => '13:07:00'],
            ['spectatorid' => 12, 'matchid' => 8, 'timestamp' => '15:05:00'],
            ['spectatorid' => 13, 'matchid' => 12, 'timestamp' => '13:58:00'],
            ['spectatorid' => 14, 'matchid' => 18, 'timestamp' => '17:10:00'],
            ['spectatorid' => 15, 'matchid' => 12, 'timestamp' => '13:05:00'],
            ['spectatorid' => 16, 'matchid' => 1, 'timestamp' => '14:23:00'],
            ['spectatorid' => 17, 'matchid' => 6, 'timestamp' => '16:20:00'],
            ['spectatorid' => 18, 'matchid' => 8, 'timestamp' => '15:00:00'],
            ['spectatorid' => 21, 'matchid' => 1, 'timestamp' => '12:12:12'],
        ];

        foreach ($entries as $entry) {
            Entry::create($entry);
        }
    }
}
