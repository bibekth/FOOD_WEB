<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Food;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Role::insert([
            [
                'name' => 'Super-Admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'Admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'User',
                'guard_name' => 'web'
            ]
        ]);
        User::create([
            'name' => 'Bibek Thapa Magar',
            'email' => 'bibek.thapa0521@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'role' => 'Super-Admin',
        ]);
        Food::insert([
            ['name' => 'Chowmein', 'description' => ''],
            ['name' => 'Momo', 'description' => ''],
            ['name' => 'Burger', 'description' => ''],
        ]);
        Category::insert([
            ['name' => 'Veg', 'description' => ""],
            ['name' => 'Non Veg', 'description' => ""],
        ]);
        DB::commit();
    }
}
