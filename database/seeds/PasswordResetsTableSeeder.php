<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'bela.papp@gmail.com',
                'token' => 'ad950b38968b8db9942b99ffe4e3bfccb2462f522f335936442a00245e528a40',
                'created_at' => '2016-11-08 07:02:34',
            ),
        ));
        
        
    }
}
