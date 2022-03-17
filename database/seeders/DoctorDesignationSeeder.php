<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoctorDesignation;

class DoctorDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'SURGON']
        ];

      DoctorDesignation::insert($data);

       
    }
}
