<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; //跟database有關的話記得要加
use App\Models\Collection; //要用ORM語法的話才會自動新增上傳以及編輯時間，要先加 use App\Models\{modelName};

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
