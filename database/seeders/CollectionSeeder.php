<?php

namespace Database\Seeders;

use App\Models\Collection;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Collection();
        $row->title = '親子步道1';
        $row->subTitle = '老少咸宜，生活好去處1';
        $row->bgColor = 'yellow1';
        $row->iconImage = 'https://example.com/uploads/images/collection/0/icon.png';
        $row->save();

        
    }
}
