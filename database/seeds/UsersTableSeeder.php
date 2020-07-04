<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$wYedkpXqgO0AOQQVS8M.X.B1SKIPxzI2DUJtLakfFhLZT6ghXXJuK',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-06-26 13:47:24',
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'Admin',
                'email'              => 'user@user.com',
                'password'           => '$2y$10$wYedkpXqgO0AOQQVS8M.X.B1SKIPxzI2DUJtLakfFhLZT6ghXXJuK',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-06-26 13:50:24',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}