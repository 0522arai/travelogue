<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'date' => '3/20',
                'title' => '卒業旅行',
                'body' => '楽しかった',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'category_id' => 1,
                'user_id' => 1,
                'favorite_id' => 1,
            ]);
        
         DB::table('posts')->insert([
                'date' => '8/1~8/3',
                'title' => '夏旅行',
                'body' => 'また行きたい',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'category_id' => 1,
                'user_id' => 1,
                'favorite_id' => 1,
            ]);
            
        DB::table('posts')->insert([
                'date' => '9/3, 9/4',
                'title' => '旅行',
                'body' => '最高',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'category_id' => 1,
                'user_id' => 1,
                'favorite_id' => 1,
            ]);
        //
    }
}
