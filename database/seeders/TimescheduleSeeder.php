<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class TimescheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeschedules')->insert([
                'date' => '3/20',
                'time' => '9:00',
                'schedule' => '出発',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 1,
                'user_id' => 1,
            ]);
        
        DB::table('timeschedules')->insert([
                'date' => '3/20',
                'time' => '14:00',
                'schedule' => '()に到着',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 1,
                'user_id' => 1,
            ]);
        
        DB::table('timeschedules')->insert([
                'date' => '9/3',
                'time' => '14:00',
                'schedule' => '{}に到着',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 3,
                'user_id' => 1,
            ]);
            
        DB::table('timeschedules')->insert([
                'date' => '8/1',
                'time' => '9:00',
                'schedule' => '出発',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 2,
                'user_id' => 1,
            ]);
        
        DB::table('timeschedules')->insert([
                'date' => '8/1',
                'time' => '14:00',
                'schedule' => '[]に到着',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 2,
                'user_id' => 1,
            ]);
        //
    }
}
