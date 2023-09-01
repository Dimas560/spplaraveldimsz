<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'admin',
                'password' => 'admin',
                'nama' => 'Admin',
                'level' => 'admin'
            ],
            [
                'username' => 'dimas',
                'password' => '1234',
                'nama' => 'Dimas',
                'level' => 'siswa'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
