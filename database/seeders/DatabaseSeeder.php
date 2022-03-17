<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
=======
       $this->call(DoctorDesignationSeeder::class);
       $this->call(TeamSeeder::class);
       $this->call(RegionSeeder::class);
       $this->call(HeadQuarterSeeder::class);
       $this->call(DepoSeeder::class);
       $this->call(DoctorSeeder::class);
       $this->call(AdminSeeder::class);
       $this->call(SMSeeder::class);
       $this->call(RSMSeeder::class);
       $this->call(DSMSeeder::class);
       $this->call(PsoSeeder::class);
       $this->call(ProductSeeder::class);
>>>>>>> 6ae75180b4eb578fcc6a6c5d320b3ff48320aee4
    }
}
