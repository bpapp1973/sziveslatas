<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'bpapp',
                'email' => 'bela.papp@gmail.com',
                'password' => '$2y$10$rKQj4i4aLxDmfjAmXeOz8eA/s/OgD3Duf6yuxD4TWj9D6yw/FoG7a',
                'roles_id' => 4,
                'first_name' => 'Béla',
                'last_name' => 'Papp',
                'birthday' => '1973-06-21',
                'address' => 'Kossuth u. 36.',
                'cities_id' => 1212,
                'phone' => '+36302650543',
                'activated' => 1,
                'remember_token' => 'ssKUXMmTHovmJzpFd8CubC1YvqHusfTo2bVXqqJBcVcTk14HtPLilRKnPOOE',
                'created_at' => '2016-09-15 20:16:00',
                'updated_at' => '2016-11-19 15:09:29',
            ),
            1 => 
            array (
                'id' => 13,
                'username' => 'bpapp2',
                'email' => 'bela.papp@outlook.hu',
                'password' => '$2y$10$xS6Vj2EtCZxFzwHgGGpFNe/kXVLn6pKNEjNsMy5waOfyGw/Gy1Vd6',
                'roles_id' => 2,
                'first_name' => 'Béla',
                'last_name' => 'Papp',
                'birthday' => '1973-06-21',
                'address' => 'Kossuth u. 36.',
                'cities_id' => 1212,
                'phone' => '+36302650543',
                'activated' => 1,
                'remember_token' => 'KTLsLG6fToC1xLRYxe0Lr3Dhw2pBrcONwytiOKJJwxWRSWwkXkCboFXcst9K',
                'created_at' => '2016-10-04 06:48:41',
                'updated_at' => '2016-11-13 15:08:13',
            ),
            2 => 
            array (
                'id' => 14,
                'username' => 'Gyurci',
                'email' => 'gurzo.gyorgy@gmail.com',
                'password' => '$2y$10$kC1Tgbr1fKnSjkxDTSM1ZOHjWSXh3LuGT4mYbwIZPUi.bqa3xAj4.',
                'roles_id' => 4,
                'first_name' => 'György',
                'last_name' => 'Gurzó',
                'birthday' => '1973-07-20',
                'address' => '4028 Apafi utca 42-44./A Fszt. 26.',
                'cities_id' => 1210,
                'phone' => '+36703602116',
                'activated' => 1,
                'remember_token' => 'IZcXg3zLNFCVm5W4dqJczqfCGuAQxm5ptlEFdqvF3QfSYw1THyoA3L7zFO5n',
                'created_at' => '2016-10-04 08:23:55',
                'updated_at' => '2016-11-14 14:05:37',
            ),
            3 => 
            array (
                'id' => 18,
                'username' => 'Sárika',
                'email' => 'sacko01@gmail.com',
                'password' => '$2y$10$5Vfh76o/6598m.M7fxsZ7emwRlDZh0V/oitfRBEWW7oJOYnGZJsWa',
                'roles_id' => 1,
                'first_name' => 'Sára',
                'last_name' => 'Gurzó',
                'birthday' => '1980-11-26',
                'address' => '4028 Apafi utca 42-44./A Fszt. 26.',
                'cities_id' => 1210,
                'phone' => '+36706294499',
                'activated' => 0,
                'remember_token' => 'kySNXAwRerF8WCoFmfjSXnkDJ1xxBl96ZKhA6lnLJToshlcjgufWFUqG7RTl',
                'created_at' => '2016-11-06 23:04:56',
                'updated_at' => '2016-11-11 14:42:55',
            ),
        ));
        
        
    }
}
