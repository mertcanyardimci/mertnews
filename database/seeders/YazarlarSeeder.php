<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class YazarlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yazars=['Genel','Mete','Fusun','Mehmet','Ayse'];
        foreach($yazars as $yazar){
        DB::table('yazars')->insert([
            'name'=>$yazar,
            'slug'=>Str::slug($yazar),
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
 }
}