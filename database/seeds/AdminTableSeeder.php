<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'VAPERSHOP',
            'email' => 'jeal.code47@gmail.com',
            'password' => bcrypt('password'),
            'surname' => 'admin',
            'id_type' => '2',
            'id_number' => '123456789',
            'phoneNumber' => '(0044) 8647 1234 587',
            'address' => '123 New Design Str, ABC Building, Lima, Perú.',
            'admin' => true,
        ]);
    }
}
