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
        $user = App\User::create([
        	'name' =>  'jun',
        	'email'=> 'yongbong@yongbong.com',
        	'password'=> bcrypt('yongbong11!'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatar/1.png',
            'about' => 'asdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
            'facebook' => 'asdfasasdfadf',
            'youtube' => 'asdfasdf',
        ]);
    }
}
