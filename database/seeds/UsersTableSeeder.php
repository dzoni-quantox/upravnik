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
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $residentRole = Role::where('name', 'resident')->first();

        $admin = User::create([
            'name' => 'Upravnik',
            'email' => 'admin@upravnik.com',
            'password' => Hash::make('dzoni123')
        ]);
        $admin->roles()->attach($adminRole);

        $resident = User::create([
            'name' => 'Steva',
            'email' => 'steva@qtx.com',
            'password' => Hash::make('dzoni123')
        ]);
        $resident->roles()->attach($residentRole);
    }
}
