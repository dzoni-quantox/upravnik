<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Upravnik',
            'email' => 'admin@upravnik.com',
            'password' => Hash::make('dzoni123'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Dzoni',
            'email' => 'dzoni@qtx.com',
            'password' => Hash::make('dzoni123'),
            'role_id' => 2
        ]);
    }
}
