<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 43,
                'container_type' => 'company',
                'container_id' => 1,
                'name' => 'html',
                'created_at' => '2016-10-13 08:00:17',
                'updated_at' => '2016-10-13 08:00:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 44,
                'container_type' => 'company',
                'container_id' => 1,
                'name' => 'php',
                'created_at' => '2016-10-13 08:00:17',
                'updated_at' => '2016-10-13 08:00:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 46,
                'container_type' => 'company',
                'container_id' => 1,
                'name' => 'javascript',
                'created_at' => '2016-10-13 08:00:17',
                'updated_at' => '2016-10-13 08:00:17',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 47,
                'container_type' => 'company',
                'container_id' => 1,
                'name' => 'c++',
                'created_at' => '2016-10-13 08:50:48',
                'updated_at' => '2016-10-13 08:50:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 48,
                'container_type' => 'company',
                'container_id' => 1,
                'name' => 'sql',
                'created_at' => '2016-10-13 08:51:15',
                'updated_at' => '2016-10-13 08:51:15',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 49,
                'container_type' => 'company',
                'container_id' => 8,
                'name' => 'web',
                'created_at' => '2016-10-13 10:16:57',
                'updated_at' => '2016-10-13 10:16:57',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 50,
                'container_type' => 'company',
                'container_id' => 8,
                'name' => 'js',
                'created_at' => '2016-10-13 10:16:57',
                'updated_at' => '2016-10-13 10:16:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 51,
                'container_type' => 'company',
                'container_id' => 8,
                'name' => 'laravel',
                'created_at' => '2016-10-13 10:16:57',
                'updated_at' => '2016-10-13 10:16:57',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 52,
                'container_type' => 'company',
                'container_id' => 9,
                'name' => 'web',
                'created_at' => '2016-10-13 10:24:46',
                'updated_at' => '2016-10-13 10:24:46',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 53,
                'container_type' => 'company',
                'container_id' => 9,
                'name' => 'js',
                'created_at' => '2016-10-13 10:24:46',
                'updated_at' => '2016-10-13 10:24:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 54,
                'container_type' => 'company',
                'container_id' => 9,
                'name' => 'laravel',
                'created_at' => '2016-10-13 10:24:46',
                'updated_at' => '2016-10-13 10:24:46',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 55,
                'container_type' => 'company',
                'container_id' => 10,
                'name' => 'web',
                'created_at' => '2016-10-13 10:29:16',
                'updated_at' => '2016-10-13 10:29:16',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 56,
                'container_type' => 'company',
                'container_id' => 10,
                'name' => 'js',
                'created_at' => '2016-10-13 10:29:16',
                'updated_at' => '2016-10-13 10:29:16',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 57,
                'container_type' => 'company',
                'container_id' => 10,
                'name' => 'laravel',
                'created_at' => '2016-10-13 10:29:16',
                'updated_at' => '2016-10-13 10:29:16',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 58,
                'container_type' => 'company',
                'container_id' => 10,
                'name' => 'sql',
                'created_at' => '2016-10-25 17:21:55',
                'updated_at' => '2016-10-25 17:21:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 59,
                'container_type' => 'ad',
                'container_id' => 5,
                'name' => 'qwe',
                'created_at' => '2016-10-25 17:29:29',
                'updated_at' => '2016-10-25 17:29:29',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 60,
                'container_type' => 'ad',
                'container_id' => 5,
                'name' => 'asd',
                'created_at' => '2016-10-25 17:29:29',
                'updated_at' => '2016-10-25 17:29:29',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 61,
                'container_type' => 'ad',
                'container_id' => 6,
                'name' => 'DFG',
                'created_at' => '2016-10-25 17:43:26',
                'updated_at' => '2016-10-25 17:43:26',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 62,
                'container_type' => 'ad',
                'container_id' => 6,
                'name' => 'dfg',
                'created_at' => '2016-10-25 17:43:26',
                'updated_at' => '2016-10-25 17:43:26',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 63,
                'container_type' => 'ad',
                'container_id' => 6,
                'name' => 'ert',
                'created_at' => '2016-10-25 17:43:26',
                'updated_at' => '2016-10-25 17:43:26',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 64,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'dfg',
                'created_at' => '2016-10-25 17:47:32',
                'updated_at' => '2016-10-25 18:01:32',
                'deleted_at' => '2016-10-25 18:01:32',
            ),
            21 => 
            array (
                'id' => 65,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'tzu',
                'created_at' => '2016-10-25 17:47:32',
                'updated_at' => '2016-10-25 18:01:32',
                'deleted_at' => '2016-10-25 18:01:32',
            ),
            22 => 
            array (
                'id' => 66,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'pozu',
                'created_at' => '2016-10-25 18:01:32',
                'updated_at' => '2016-10-25 18:02:05',
                'deleted_at' => '2016-10-25 18:02:05',
            ),
            23 => 
            array (
                'id' => 67,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'lkjoi',
                'created_at' => '2016-10-25 18:02:05',
                'updated_at' => '2016-10-25 18:06:58',
                'deleted_at' => '2016-10-25 18:06:58',
            ),
            24 => 
            array (
                'id' => 68,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'asdf',
                'created_at' => '2016-10-25 18:06:58',
                'updated_at' => '2016-10-25 18:06:58',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 69,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'ert',
                'created_at' => '2016-10-25 18:11:22',
                'updated_at' => '2016-10-25 18:11:22',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 70,
                'container_type' => 'ad',
                'container_id' => 7,
                'name' => 'tzhtzh',
                'created_at' => '2016-10-25 18:11:39',
                'updated_at' => '2016-10-25 18:11:39',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 71,
                'container_type' => 'ad',
                'container_id' => 8,
                'name' => 'erf',
                'created_at' => '2016-10-25 18:40:50',
                'updated_at' => '2016-10-25 18:40:50',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 72,
                'container_type' => 'ad',
                'container_id' => 9,
                'name' => 'erf',
                'created_at' => '2016-10-25 18:48:35',
                'updated_at' => '2016-10-25 18:48:35',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 73,
                'container_type' => 'ad',
                'container_id' => 10,
                'name' => 'erf',
                'created_at' => '2016-10-25 18:58:35',
                'updated_at' => '2016-10-25 18:58:35',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 74,
                'container_type' => 'ad',
                'container_id' => 10,
                'name' => 'qwe',
                'created_at' => '2016-10-25 18:58:35',
                'updated_at' => '2016-10-25 18:58:35',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 75,
                'container_type' => 'ad',
                'container_id' => 11,
                'name' => 'asd',
                'created_at' => '2016-10-25 19:01:36',
                'updated_at' => '2016-10-25 19:01:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
