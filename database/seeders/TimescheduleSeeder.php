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
                'time' => '9:00',
                'schedule' => '出発',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'post_id' => 1,
                'user_id' => 1,
            ]);
        //
    }
}
