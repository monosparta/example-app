<?php

namespace Database\Seeders;

use App\Models\Trail;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Trail();
        $row->title = "冷水坑步道";
        $row->location = "台北市士林區";
        $row->distance = 600;
        $row->coverImage = "https://example.com/uploads/images/trail/0/cover.jpg";
        $row->save();
    }
}
