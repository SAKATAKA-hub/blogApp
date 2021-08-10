<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; //モデルの利用
use App\Models\Comment; //モデルの利用

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['1','comment 1',],
            ['1','comment 2',],
            ['2','comment 3',],
            ['3','comment 4',],
        ];

        foreach ($data as $items) {
            $post = new POST([
                'post_id' => $items[0],
                'body' => $items[1],
            ]);
            $post->save();
        }
    }
}
