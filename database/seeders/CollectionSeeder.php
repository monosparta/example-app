<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            'title' => '親子步道',
            'subTitle' => '老少咸宜，生活好去處',
            'bgColor' => 'yellow',
            'iconImage' => 'https://example.com/uploads/images/collection/0/icon.png',
        ]);
    }
}
