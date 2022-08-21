<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create(
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'usertype' => '0',
                'password' => Hash::make('user123')

            ]
        );
        User::create(

            [
                'name' => 'admin',
                'email' => 'admin@user.com',
                'usertype' => '1',
                'password' => Hash::make('admin123')

            ]
        );
    }
}
