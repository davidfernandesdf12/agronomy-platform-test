<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::query()->where('email', '!=', 'admin@admin.com')->count() > 0)
            return;

        User::query()
            ->create([
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('secret'),
                'remember_token'    => Str::random(10),
            ]);
}
}
