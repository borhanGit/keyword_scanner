<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = array(
            array('name' => 'ALL'),
            array('name' => 'BUF'),
            array('name' => 'IMG'),
            array('name' => 'MGF'),
            array('name' => 'PRI'),
            array('name' => 'PUR'),
            array('name' => 'Special team'),
            array('name' => 'SPLIT'),
            array('name' => 'SR')
          );

          Team::insert($team);
    }
}
