<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Revivla',
                'email'          => 'revivla@gmail.com',
                'nomor'         => 02345677123,
                'password'      => Hash::make('revivla@gmail.com'),
                'alamat'        => 'Jl. Malang Kota',
                'profil'       =>  'product-2.png',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
