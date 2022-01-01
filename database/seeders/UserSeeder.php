<?php

namespace Database\Seeders;

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
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'role' => 1,
            ],
            [
                'name' => 'Hanna',
                'email' => 'hanna@example.com',
                'password' => Hash::make('hanna123'),
                'role' => 2,
            ]
        ]);
    }
}
