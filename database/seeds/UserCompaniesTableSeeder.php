<?php

use Illuminate\Database\Seeder;

class UserCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_companies')->delete();
        
        \DB::table('user_companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'users_id' => 1,
                'companies_id' => 1,
                'valid' => 1,
                'created_at' => '2016-09-30 19:49:28',
                'updated_at' => '2016-09-30 19:49:28',
            ),
            1 => 
            array (
                'id' => 3,
                'users_id' => 14,
                'companies_id' => 7,
                'valid' => 1,
                'created_at' => '2016-10-04 08:46:32',
                'updated_at' => '2016-10-04 08:46:32',
            ),
            2 => 
            array (
                'id' => 5,
                'users_id' => 13,
                'companies_id' => 10,
                'valid' => 1,
                'created_at' => '2016-10-13 10:29:16',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
