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
        DB::table('user');
    	User::create(array(
        'name'     => 'Chris Sevilleja',
        'username' => 'sevilayha',
        'sdt'=>'gfdsz',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
    ));
    }
}
