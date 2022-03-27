<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Seed users to the database.
     *
     * @return void
     */
    public function run(): void
    {
        (new CreateNewUser)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    }
}
