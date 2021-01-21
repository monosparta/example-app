<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        for($i=0;$i<10;$i++){
            DB::table('collections')->insert([
                'title' => Str::random(5),
                'subTitle' => Str::random(5),
                'bgColor' =>Str::random(5),
                'iconImage' =>Str::random(5),
            ]);
        }   
    }
}
