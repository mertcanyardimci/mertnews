<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'category_id'=>'1',
            'yazar_id'=>'1',
            'title'=>'Top 10 destinations to visit in',
            'image'=>'https://placebear.com/640/360',
            'content'=>'Lorem ipsum dolor sit amet...',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
        DB::table('news')->insert([
            'category_id'=>'2',
            'yazar_id'=>'2',
            'title'=>'How to start your own digital',
            'image'=>'https://placekitten.com/640/360',
            'content'=>'One of the originals, lorempixel ',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
        DB::table('news')->insert([
            'category_id'=>'3',
            'yazar_id'=>'3',
            'title'=>'How to manage working while',
            'image'=>'https://baconmockup.com/640/360',
            'content'=>'Boasting 12 different categories, various ratios',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
        DB::table('news')->insert([
            'category_id'=>'4',
            'yazar_id'=>'4',
            'title'=>'Best 15 sunsets to experience',
            'image'=>'https://placebear.com/640/360',
            'content'=>'Love nature? Then you ll love placebear',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
