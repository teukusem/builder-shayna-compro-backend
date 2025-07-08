<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Angga Setiawan',
                'role' => 'Chief Executive Officer',
                'location' => 'Shanghai, China',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shayna Liza',
                'role' => 'Product Manager',
                'location' => 'Bali, Indonesia',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bruno Oleo',
                'role' => 'Customer Relations',
                'location' => 'Orchard, Singapore',
                'featured' => true,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sami Kimi',
                'role' => 'Senior 3D Designer',
                'location' => 'Ho Chi Min, Vietnam',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wibowo Putra',
                'role' => 'Senior 3D Designer',
                'location' => 'Ho Chi Min, Vietnam',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Putri Emily',
                'role' => 'Chief Executive Officer',
                'location' => 'Shanghai, China',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yuyan Chin',
                'role' => 'Product Manager',
                'location' => 'Bali, Indonesia',
                'featured' => false,
                'is_view_all' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'View All',
                'role' => 'Our Great People',
                'location' => null,
                'featured' => false,
                'is_view_all' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('teams')->insert($teams);
    }
}
