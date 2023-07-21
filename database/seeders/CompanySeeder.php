<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->count(5)->create();
    }
}
