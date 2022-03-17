<?php

namespace Database\Seeders;

use App\Models\SmProfile;
use Illuminate\Database\Seeder;

class SMSeeder extends Seeder
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
                'email'     => 'sherealik@gmail.com',
                'mobile_no' => '01749240901',
                'role'      => 'SM',
                'pin_code'  => 'SM01',
                'ffc'       => 'SM01'
            ],
            [
                'name'      => 'Hiron Mollik Sagor',
                'user_id'   => 'sagor',
                'password'  => '3456',
                'email'     => 'sagor@mail.com',
                'mobile_no' => '01749240902',
                'role'      => 'SM',
                'pin_code'  => 'SM02',
                'ffc'       => 'SM02'
            ],
            [
                'name'      => 'Selim',
                'user_id'   => 'selim',
                'password'  => '3456',
                'email'     => 'selim@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'SM',
                'pin_code'  => 'SM03',
                'ffc'       => 'SM03'
            ],
            [
                'name'      => 'Borhan',
                'user_id'   => 'borhan',
                'password'  => '3456',
                'email'     => 'borhan@mail.com',
                'mobile_no' => '01749240903',
                'role'      => 'SM',
                'pin_code'  => 'SM04',
                'ffc'       => 'SM04'
            ],
            [
                'name'      => 'Sumaya',
                'user_id'   => 'sumaya',
                'password'  => '3456',
                'email'     => 'sumaya@mail.com',
                'mobile_no' => '01749240904',
                'role'      => 'SM',
                'pin_code'  => 'SM05',
                'ffc'       => 'SM05'
            ],
            [
                'name'      => 'Rakin',
                'user_id'   => 'rakin',
                'password'  => '3456',
                'email'     => 'rakin@mail.com',
                'mobile_no' => '01749240905',
                'role'      => 'SM',
                'pin_code'  => 'SM06',
                'ffc'       => 'SM06'
            ],
        ];
        
        SmProfile::insert($data);
    }
}
