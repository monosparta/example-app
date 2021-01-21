<?php

namespace Database\Seeders;

use App\Models\Trail;
use Illuminate\Database\Seeder;
class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trail::factory()
            ->count(5)
            ->create();
    }
}
