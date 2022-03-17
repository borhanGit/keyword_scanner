<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = array(
            array('name' => 'All'),
            array('name' => 'Barisal'),
            array('name' => 'Bhairab'),
            array('name' => 'Bogra'),
            array('name' => 'Chandpur'),
            array('name' => 'Comilla'),
            array('name' => 'Cox\'s Bazar'),
            array('name' => 'Ctg-A'),
            array('name' => 'Ctg-B'),
            array('name' => 'Dhaka F'),
            array('name' => 'Dhk-A'),
            array('name' => 'Dhk-C'),
            array('name' => 'Dhk-D'),
            array('name' => 'Dhk-E'),
            array('name' => 'Dhk-F'),
            array('name' => 'Dinajpur'),
            array('name' => 'Faridpur'),
            array('name' => 'Feni'),
            array('name' => 'Jessore'),
            array('name' => 'Khulna'),
            array('name' => 'Moulvibazar'),
            array('name' => 'Mymensingh'),
            array('name' => 'Narayngonj'),
            array('name' => 'Rajshahi'),
            array('name' => 'Rangpur'),
            array('name' => 'Sylhet'),
            array('name' => 'Tangail')
          );

          Region::insert($region);
    }
}
