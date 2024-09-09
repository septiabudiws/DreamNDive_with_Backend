<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUsers = [
            [
                'name' => 'Dinda Ayu Safitri',
                'email' => 'dream@gmail.com',
                'password' => bcrypt('123'),
            ]

        ];

        foreach ($dataUsers as $user) {
            User::create($user);
    }
    }
}
