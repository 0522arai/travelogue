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
            'date' => '7/24',
            'title' => '旅行',
            'body' => '楽しかった',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'category_id' => 1, 
            'favorite_id' => 1, 
            'timeschedule_id' => 1,
            ]);
    }
}
