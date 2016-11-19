<?php

use Illuminate\Database\Seeder;

class UserActivationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_activations')->delete();
        
        \DB::table('user_activations')->insert(array (
            0 => 
            array (
                'user_id' => 11,
                'token' => '7a806717e194d52556c82a4aff040262aa60df4d1c234aaa4df6e41a196979ff',
                'created_at' => '2016-09-30 19:37:08',
            ),
            1 => 
            array (
                'user_id' => 10,
                'token' => '0b893a8dd00dd62c29ef7e8b492baf91bf5d232652be3dace24cb93fe1a0285a',
                'created_at' => '2016-09-26 21:03:50',
            ),
            2 => 
            array (
                'user_id' => 12,
                'token' => '5ee0fffe9531f5d5700ebcdbde8f2fb89295064a41638acd7423d2240f45bc8b',
                'created_at' => '2016-10-04 06:47:17',
            ),
            3 => 
            array (
                'user_id' => 15,
                'token' => '873d90cd7bb6437d3958fbd8ac9890b798b12b6489ec2ba88cc2df1ee487e87b',
                'created_at' => '2016-10-11 12:03:51',
            ),
            4 => 
            array (
                'user_id' => 16,
                'token' => 'ea9071ddadc42f3aed006570a3f4f851ca74a5972ab1f942bf0ecdba8e9d19bd',
                'created_at' => '2016-10-11 12:05:47',
            ),
            5 => 
            array (
                'user_id' => 17,
                'token' => '79b13be9ecff6889a1842739c20e6cc1815755150ad5fbc79f8e959c34a34aa1',
                'created_at' => '2016-10-25 12:19:45',
            ),
            6 => 
            array (
                'user_id' => 18,
                'token' => '841d366cc790c979f0c89728371d9ef1ff80b047cdab8ee9fefadb345dbc7984',
                'created_at' => '2016-11-06 23:04:56',
            ),
        ));
        
        
    }
}
