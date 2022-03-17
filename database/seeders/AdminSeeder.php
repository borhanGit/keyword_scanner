<?php

namespace Database\Seeders;

use App\Models\AdminProfile;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_profile = array(
            array('id' => '1','name' => 'Mohammad Ali','email' => 'mohammad.ali@renata-ltd.com','mobile_no' => '2147483647','user_id' => 'admin','password' => '3478','role' => 'Admin','image_name' => 'Md-Hafizur-Rahman.jpg','image_path' => '../profile_photo/Md-Hafizur-Rahman.jpg'),
            array('id' => '2','name' => 'Md Abdul Aziz','email' => 'aziz@renata-ltd.com','mobile_no' => '123456','user_id' => 'RX-ADMIN-1','password' => '123456','role' => 'Admin','image_name' => 'avatar5.png','image_path' => '../profile_photo/avatar5.png'),
            array('id' => '3','name' => 'AL ISTIAK UR RAHMAN','email' => 'istiak@renata-ltd.com','mobile_no' => '1811408682','user_id' => 'RX-ADMIN-2','password' => '123456','role' => 'Admin','image_name' => 'avatar5.png','image_path' => '../profile_photo/avatar5.png'),
            array('id' => '4','name' => 'Md. Shafiqul Islam Shafi','email' => 'shafi07@renata-ltd.com','mobile_no' => '1817049476','user_id' => 'Orcef_Admin','password' => 'Orcef@1234','role' => 'Orcef','image_name' => 'avatar5.png','image_path' => '../profile_photo/avatar5.png'),
            array('id' => '5','name' => 'Mohammad Ali','email' => 'mohammad.ali@renata-ltd.com','mobile_no' => '1847324913','user_id' => 'RX-ADMIN-5','password' => 'PS-1234','role' => 'Admin','image_name' => 'growthmsn.jpg','image_path' => '../profile_photo/growthmsn.jpg')
          );

        AdminProfile::insert($admin_profile);
    }
}
