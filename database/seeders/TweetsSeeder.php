<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tweet;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

class TweetsSeeder extends Seeder
{
    public function run()
    {
        Tweet::factory()->count(10)->create();
        // DB::table('tweets')->insert([
        //     'content' => Str::random(100),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
