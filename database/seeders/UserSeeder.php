<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'nicholas',
                'email'     => 'nicholas@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 1,
                'address'   => 'Bandung',
                'status'    => 'Lajang',
            ],
            [
                'name'      => 'Hasudungan',
                'email'     => 'hasudungan@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 2,
                'address'   => 'Bandung',
                'status'    => 'Lajang',
            ]
        ];
        User::insert($users);
    }
}
