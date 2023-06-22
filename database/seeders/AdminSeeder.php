<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'email_verified_at' => now(),
                    'password' => '123123123', // password
                ])->assignRole('writer', 'admin');
    }
}
