<?php

use Illuminate\Database\Seeder;

class UserSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'            =>  1,
            'name'          =>  'Waviq subhi',
            'email'         =>  'waviq.subkhi@gmail.com',
            'username'      =>  'admin',
            'password'      =>  bcrypt('admin'),
        ]);
    }
}
