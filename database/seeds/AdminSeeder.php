<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
            array(
                'name' => 'Sadat',
                'email' => 'sadat@gmail.com',
                'phone_no' => '01675875018',
                'gender' => 'male',
                'password' => bcrypt('123456'),
            )
        ));
    }
}
