<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Company;
use App\Models\Admin\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        Company::factory()->count(25)->create();
        Post::factory()->count(25)->create();

        User::create([
           'name' => 'admin',
           'email' => 'admin@mail.com',
           'role_id' => 1,
           'password' => Hash::make(123456789),
        ]);

    }
}
