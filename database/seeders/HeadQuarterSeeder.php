<?php

namespace Database\Seeders;

use App\Models\HeadQuarter;
use Illuminate\Database\Seeder;

class HeadQuarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $head_quarter = array(
            array('name' => 'DMCH'),
            array('name' => 'DMCH-I')
          );

        HeadQuarter::insert($head_quarter);
    }
}
