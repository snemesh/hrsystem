<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('users')->insert([
//            'name'     => str_random(10),
//            'email'    => str_random(6).'@gmail.com',
//            'password' => bcrypt('secret'),
//            'salary'   => random_int(1000,4000),
//            'jiralogin'=> str_random(5),
//        ]);
        $user = factory(App\User::class, 50)->create();
    }
}

