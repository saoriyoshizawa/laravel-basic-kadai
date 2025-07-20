<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => '例のタイトル',
                'content' => '例の内容',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 他のデータを追加する場合はここに続けます
        ]);
    }
}