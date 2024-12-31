<?php

use Illuminate\Database\Seeder;
use App\Models\Matchs;

class MatchSeeder extends Seeder
{
    public function run()
    {
        $matches = [
            ['id' => '1', 'mdate' => '2024-03-22', 'startsat' => '15:00:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '2', 'mdate' => '2019-04-20', 'startsat' => '15:30:00', 'ticketprice' => '1000.00', 'mtype' => 'cup'],
            ['id' => '3', 'mdate' => '2000-05-11', 'startsat' => '10:00:00', 'ticketprice' => '1000.00', 'mtype' => 'championship'],
            ['id' => '4', 'mdate' => '2018-11-03', 'startsat' => '13:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '5', 'mdate' => '2018-12-01', 'startsat' => '13:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '6', 'mdate' => '2018-08-15', 'startsat' => '17:00:00', 'ticketprice' => '200.00', 'mtype' => 'cup'],
            ['id' => '7', 'mdate' => '2018-11-17', 'startsat' => '13:30:00', 'ticketprice' => '1000.00', 'mtype' => 'championship'],
            ['id' => '8', 'mdate' => '2019-05-18', 'startsat' => '16:00:00', 'ticketprice' => '1111.00', 'mtype' => 'cup'],
            ['id' => '9', 'mdate' => '2018-08-22', 'startsat' => '17:00:00', 'ticketprice' => '200.00', 'mtype' => 'cup'],
            ['id' => '10', 'mdate' => '2018-09-22', 'startsat' => '15:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '11', 'mdate' => '2018-08-25', 'startsat' => '17:00:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '12', 'mdate' => '2018-10-06', 'startsat' => '14:00:00', 'ticketprice' => '1000.00', 'mtype' => 'championship'],
            ['id' => '13', 'mdate' => '2018-10-20', 'startsat' => '13:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '14', 'mdate' => '2019-03-09', 'startsat' => '13:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '15', 'mdate' => '2018-09-26', 'startsat' => '15:00:00', 'ticketprice' => '500.00', 'mtype' => 'cup'],
            ['id' => '16', 'mdate' => '2019-05-04', 'startsat' => '16:00:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '17', 'mdate' => '2018-10-24', 'startsat' => '14:00:00', 'ticketprice' => '1000.00', 'mtype' => 'cup'],
            ['id' => '18', 'mdate' => '2018-08-11', 'startsat' => '17:00:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '19', 'mdate' => '2019-04-06', 'startsat' => '15:30:00', 'ticketprice' => '500.00', 'mtype' => 'championship'],
            ['id' => '20', 'mdate' => '2010-01-01', 'startsat' => '11:11:11', 'ticketprice' => '1111.00', 'mtype' => 'cup'],
        ];

        foreach ($matches as $spectator) {
            Matchs::create($spectator);
        }
    }
}
