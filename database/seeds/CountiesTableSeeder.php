<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('counties')->delete();
        
        \DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bács-Kiskun',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Baranya',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Békés',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Borsod-Abaúj-Zemplén',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Csongrád',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Fejér',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Győr-Moson-Sopron',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Hajdú-Bihar',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Heves',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Jász-Nagykun-Szolnok',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Komárom-Esztergom',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Nógrád',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pest',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Somogy',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Szabolcs-Szatmár-Bereg',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Tolna',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Vas',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Veszprém',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Zala',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Budapest',
                'created_at' => '2016-09-09 18:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
