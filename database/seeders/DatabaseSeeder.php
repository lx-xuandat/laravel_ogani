<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Database\Factories\ProductFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::factory(100)->create();

        User::truncate();
        $users = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "email_verified_at" => null,
                "current_team_id" => 1,
                "profile_photo_path" => null,
                "is_admin" => 1,
                "password" => bcrypt('admin@gmail.com'),
            ],
            [
                "name" => "Luu Xuan Dat",
                "email" => "lx.xuandat@gmail.com",
                "email_verified_at" => null,
                "current_team_id" => 1,
                "profile_photo_path" => null,
                "is_admin" => 0,
                "password" => bcrypt('lx.xuandat@gmail.com'),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        User::factory(10)->create();
    }
}
