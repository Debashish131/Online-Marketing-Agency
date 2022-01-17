<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert(array(
            array(
                'name' => "orpon",
                'email' => 'orpon@gmail.com',
                'password' => bcrypt('12345'),
            ),
            array(
                'name' => "admin",
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            )
        ));

    }
}
