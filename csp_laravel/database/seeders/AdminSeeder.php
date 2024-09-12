<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ndao',
            'fname' => 'Cheikh',
            'email' => 'admin@example.com',
            'phone' => '0000000000',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 1
        ]);
    }
}
