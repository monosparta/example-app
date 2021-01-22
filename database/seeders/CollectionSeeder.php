<?php

namespace Database\Seeders;

use App\Models\Collection;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // // timestamp not ok
        // Collection::insert([
        //     'title' => '親子步道',
        //     'subTitle' => '老少咸宜，生活好去處',
        //     'bgColor' => 'yellow',
        //     'iconImage' => 'https://example.com/uploads/images/collection/0/icon.png',
        // ]);

        // // timestamp not ok
        // DB::table('collections')->insert([
        //     'title' => '親子步道',
        //     'subTitle' => '老少咸宜，生活好去處',
        //     'bgColor' => 'yellow',
        //     'iconImage' => 'https://example.com/uploads/images/collection/0/icon.png',
        // ]);
        
        // timestamp ok
        $row = new Collection();
        $row->title = '親子步道';
        $row->subTitle = '老少咸宜，生活好去處';
        $row->bgColor = 'yellow';
        $row->iconImage = 'https://example.com/uploads/images/collection/0/icon.png';
        $row->save();
    }
}
