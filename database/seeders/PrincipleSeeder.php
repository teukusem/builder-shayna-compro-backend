<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrincipleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $principles = [
            [
                'title' => 'Prioritize Trust',
                'image' => null,
                'icon' => null,
                'description' => 'Shayna is an award-winning ametia construction company with lorem',
                'learn_more_link' => null,
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Professional People',
                'image' => null,
                'icon' => null,
                'description' => 'Shayna is an award-winning ametia construction company with lorem',
                'learn_more_link' => null,
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Eco Friendly Concept',
                'image' => null,
                'icon' => null,
                'description' => 'Shayna is an award-winning ametia construction company with lorem',
                'learn_more_link' => null,
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('principles')->insert($principles);
    }
}
