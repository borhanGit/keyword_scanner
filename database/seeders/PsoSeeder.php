<?php

namespace Database\Seeders;

use App\Models\PsoProfile;
use Illuminate\Database\Seeder;

class PsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'Shere Ali',
                'user_id'   => 'shereali',
                'password'  => '3456',
                'sm_profile_id' => 1,
                'rsm_profile_id' => 1,
                'dsm_profile_id' => 1,
                'email'     => 'sherealik@gmail.com',
                'mobile_no' => '01749240901',
                'role'      => 'PSO',
                'pin_code'  => 'PSO01',
                'ffc'       => 'PSO01',
                'region' => 'Barisal',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
            [
                'name'      => 'Hiron Mollik Sagor',
                'user_id'   => 'sagor',
                'password'  => '3456',
                'sm_profile_id' => 2,
                'rsm_profile_id' => 2,
                'dsm_profile_id' => 2,
                'email'     => 'sagor@mail.com',
                'mobile_no' => '01749240902',
                'role'      => 'PSO',
                'pin_code'  => 'PSO02',
                'ffc'       => 'PSO02',
                'region' => 'Barisal',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
            [
                'name'      => 'Selim',
                'user_id'   => 'selim',
                'password'  => '3456',
                'sm_profile_id' => 3,
                'rsm_profile_id' => 3,
                'dsm_profile_id' => 3,
                'email'     => 'selim@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'PSO',
                'pin_code'  => 'PSO03',
                'ffc'       => 'PSO03',
                'region' => 'Bhairab',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
            [
                'name'      => 'Borhan',
                'user_id'   => 'borhan',
                'password'  => '3456',
                'sm_profile_id' => 4,
                'rsm_profile_id' => 4,
                'dsm_profile_id' => 4,
                'email'     => 'borhan@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'PSO',
                'pin_code'  => 'PSO04',
                'ffc'       => 'PSO04',
                'region' => 'Bhairab',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
            [
                'name'      => 'Sumaya',
                'user_id'   => 'sumaya',
                'password'  => '3456',
                'sm_profile_id' => 5,
                'rsm_profile_id' => 5,
                'dsm_profile_id' => 5,
                'email'     => 'sumaya@mail.com',
                'mobile_no' => '01749240904',
                'role'      => 'PSO',
                'pin_code'  => 'PSO05',
                'ffc'       => 'PSO05',
                'region' => 'Barisal',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
            [
                'name'      => 'Rakin',
                'user_id'   => 'rakin',
                'password'  => '3456',
                'sm_profile_id' => 6,
                'rsm_profile_id' => 6,
                'dsm_profile_id' => 6,
                'email'     => 'rakin@mail.com',
                'mobile_no' => '01749240905',
                'role'      => 'PSO',
                'pin_code'  => 'PSO06',
                'ffc'       => 'PSO06',
                'region' => 'Bhairab',
                'head_quarter' => 'DMCH',
                'depot' => 'Turag'
            ],
        ];
        
        PsoProfile::insert($data);
    }
}
