<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'teszt',
            'email' => 'teszt@teszt.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'noeee',
            'email' => 'lizanoeminagy@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'peter',
            'email' => 'peter@gmail.com',
            'password' => Hash::make('12345678'),
        ]);



    }
}
