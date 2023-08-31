<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $userSeeder = User::create(
            [
                "email" => Str::random(10) . '@email.com',
                "password" => bcrypt("123"),
                "is_admin" => true,
                "is_active" => true,
                "username" => Str::random(20),
                "first_name" => Str::random(10),
                "last_name" => Str::random(10),
            ]
        );
    }
}
