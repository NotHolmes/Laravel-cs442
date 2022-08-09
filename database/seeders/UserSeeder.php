<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'admin@example.com')->first();
        if (!$admin) {
            $admin = new User();
            $admin->name = "Administrator S.";
            $admin->role = "ADMIN";
            $admin->email = "admin@example.com";
            $admin->password = "adminpass";

            $admin->save();
        }

        $user = User::where('email', 'user01@example.com')->first();
        if(!$user) {
            $user = new User();
            $user->name = "User 01";
            $user->role = "USER";
            $user->email = "user01@example.com";
            $user->password = "userpass";

            $user->save();
        }
    }
}
