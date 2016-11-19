<?php

use Illuminate\Database\Seeder;

class ListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lists')->delete();
        
        \DB::table('lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'form' => 'models.companies.create',
                'control' => 'payment',
                'seqid' => 1,
                'value' => 'Átutalás',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'form' => 'models.companies.create',
                'control' => 'payment',
                'seqid' => 2,
                'value' => 'Csekk',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'form' => 'models.companies.create',
                'control' => 'payment',
                'seqid' => 3,
                'value' => 'Voucher',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'form' => 'models.companies.create',
                'control' => 'subscriptiontype',
                'seqid' => 1,
                'value' => 'Havi',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'form' => 'models.companies.create',
                'control' => 'subscriptiontype',
                'seqid' => 2,
                'value' => 'Negyedéves',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'form' => 'models.companies.create',
                'control' => 'subscriptiontype',
                'seqid' => 3,
                'value' => 'Éves',
                'isenabled' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
