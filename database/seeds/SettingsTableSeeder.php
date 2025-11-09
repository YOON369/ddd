<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => '용봉산자동차극장',
        	'contact_email' => 'time891@hanmail.net',
        	'contact_number' => '041-631-8123',
            'address' => '홍성군 홍북읍 상하리 도청대로 용봉산 1길 7',
            'youtube' => 'https://www.youtube.com/channel/UCsSr4vDEeMRhniSoNhLu1pA',
            'facebook' => 'https://www.facebook.com/SHOUWBOXMOVE',
            'instargram' => 'https://www.instagram.com/ybs8123',
        ]);
    }
}
