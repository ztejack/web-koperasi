<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'level_id' => 1,
            'password' => md5('12345678'),
        ]);
        Users::factory(5)->create();
    }
}
