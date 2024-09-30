<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Khalimat Suleiman',
            'email' => 'khalimatsuleiman@gmail.com',
            'phone_no' => '09069447080',
            'password' => Hash::make('admin123'),
            'is_admin' => true
        ]);
    }
}
