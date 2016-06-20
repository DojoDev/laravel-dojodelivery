<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        factory(DojoDelivery\Models\User::class)->create(

            [
                'name' => 'user',
                'email' => 'user@user.com.br',
                'password' => bcrypt('12wqasxz!QAZ'),
                'remember_token' => str_random(10),
            ]
        );

        factory(DojoDelivery\Models\User::class)->create(

            [
                'name' => 'admin',
                'email' => 'admin@user.com.br',
                'password' => bcrypt('12wqasxz!QAZ'),
                'role' =>'admin',
                'remember_token' => str_random(10),
            ]
        );


        factory(DojoDelivery\Models\User::class, 10)->create()->each(function($u){
            $u->client()->save(factory(DojoDelivery\Models\Client::class)->make());
        });
    }
}
