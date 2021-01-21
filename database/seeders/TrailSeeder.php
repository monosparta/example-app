<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trails')->insert([
            'title' => '冷水坑步道',
            'location' => '台北市士林區',
            'distance' => '600',
            'coverImage' => 'https://example.com/uploads/images/trail/0/cover.jpg',
        ]);
    }
}
