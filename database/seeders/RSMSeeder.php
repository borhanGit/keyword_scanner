<?php

namespace Database\Seeders;

use App\Models\RsmProfile;
use Illuminate\Database\Seeder;

class RSMSeeder extends Seeder
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
                'email'     => 'sherealik@gmail.com',
                'mobile_no' => '01749240901',
                'role'      => 'RSM',
                'pin_code'  => 'RSM01',
                'ffc'       => 'RSM01',
                'region' => 'Barisal'
            ],
            [
                'name'      => 'Hiron Mollik Sagor',
                'user_id'   => 'sagor',
                'password'  => '3456',
                'sm_profile_id' => 2,
                'email'     => 'sagor@mail.com',
                'mobile_no' => '01749240902',
                'role'      => 'RSM',
                'pin_code'  => 'RSM02',
                'ffc'       => 'RSM02',
                'region' => 'Barisal'
            ],
            [
                'name'      => 'Selim',
                'user_id'   => 'selim',
                'password'  => '3456',
                'sm_profile_id' => 3,
                'email'     => 'selim@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'RSM',
                'pin_code'  => 'RSM03',
                'ffc'       => 'RSM03',
                'region' => 'Bhairab'
            ],
            [
                'name'      => 'Borhan',
                'user_id'   => 'borhan',
                'password'  => '3456',
                'sm_profile_id' => 4,
                'email'     => 'borhan@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'RSM',
                'pin_code'  => 'RSM04',
                'ffc'       => 'RSM04',
                'region' => 'Bhairab'
            ],
            [
                'name'      => 'Sumaya',
                'user_id'   => 'sumaya',
                'password'  => '3456',
                'sm_profile_id' => 5,
                'email'     => 'sumaya@mail.com',
                'mobile_no' => '01749240904',
                'role'      => 'RSM',
                'pin_code'  => 'RSM05',
                'ffc'       => 'RSM05',
                'region' => 'Barisal'
            ],
            [
                'name'      => 'Rakin',
                'user_id'   => 'rakin',
                'password'  => '3456',
                'sm_profile_id' => 6,
                'email'     => 'rakin@mail.com',
                'mobile_no' => '01749240905',
                'role'      => 'RSM',
                'pin_code'  => 'RSM06',
                'ffc'       => 'RSM06',
                'region' => 'Bhairab'
            ],
        ];
        
        RsmProfile::insert($data);
    }
}
