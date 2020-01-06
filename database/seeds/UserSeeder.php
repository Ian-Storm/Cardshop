<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Ian",
            'email' => 'ian@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'name' => "Bailey",
            'email' => 'bailey@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
