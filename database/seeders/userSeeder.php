<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama' => 'admin',
            ],
            [
                'nama' => 'user'
            ]
        ];
        $user = [
            [
                'name' => 'Anjar',
                'email' => 'Anjar@gmail.com',
                'password' => bcrypt('password'),
                'kategori_id' => 1,
            ]
        ];
        Kategori::insert($kategori);
        User::insert($user);
    }
}
