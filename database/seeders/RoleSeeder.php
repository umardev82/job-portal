<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Role;
use Faker\Factory as Faker;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin',
            'role' => 'super_admin'
        ]);
        Role::create([
            'name' => 'Admin',
            'role' => 'admin'
        ]);
        Role::create([
            'name' => 'Job Seeker',
            'role' => 'job_seeker'
        ]);
        Role::create([
            'name' => 'Job Provider',
            'role' => 'job_provider'
        ]);
    }
}
