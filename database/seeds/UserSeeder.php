<?php

use App\User;
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
        User::create([

            'name'      => 'Marcos Andres',
            'email'     => 'marcos@gmail.com',
            'password'  => Hash::make('admin_smartmoodle')

        ])->assignRole('Admin');
    }
}
