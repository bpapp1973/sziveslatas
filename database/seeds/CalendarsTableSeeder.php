<?php

use Illuminate\Database\Seeder;

class CalendarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calendars')->delete();
        
        \DB::table('calendars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ads_id' => 9,
                'startdate' => '2016-10-25',
                'enddate' => '2016-10-28',
                'isavailable' => 1,
                'created_at' => '2016-10-25 18:48:35',
                'updated_at' => '2016-10-25 18:48:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
