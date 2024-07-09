<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins =[
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '1234',

            ],
        ];

        foreach ($admins as $admin) {
            $old_admin = User::where('email', $admin['email'])->first();
            if (!$old_admin) {
            User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password'=> bcrypt($admin['password']),
                ]);

            }
        }
    }
}
