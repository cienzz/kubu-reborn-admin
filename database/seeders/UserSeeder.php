<?php

namespace Database\Seeders;

use App\Constants\UserRole;
use App\Constants\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['username' => 'admin'], ['password' => Hash::make('secret'), 'role' => UserRole::ADMIN, 'status' => UserStatus::ACTIVE]);
    }
}
