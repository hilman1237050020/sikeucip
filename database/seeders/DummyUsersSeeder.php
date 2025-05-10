<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Operator',
                'email' => 'administrator@gmail.com',
                'role' => 'administrator',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Bendahara Operasional',
                'email' => 'bendaharaop@gmail.com',
                'role' => 'bendaharaop',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Bendahara Dapur',
                'email' => 'bendaharadapur@gmail.com',
                'role' => 'bendaharadapur',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Pengurus',
                'email' => 'pengurus@gmail.com',
                'role' => 'pengurus',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Orang tua',
                'email' => 'orangtua@gmail.com',
                'role' => 'orangtua',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Pimpinan Pesantren',
                'email' => 'pimpinanpesantren@gmail.com',
                'role' => 'pimpinanpesantren',
                'password' => bcrypt('123456')
            ],

        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
