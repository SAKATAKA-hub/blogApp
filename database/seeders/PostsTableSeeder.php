<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; //モデルの利用


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Title A','Body body body A',],
            ['Title B','Body body body B',],
            ['Title C','Body body body C',],
            ['Title D','Body body body D',],
            ['Title E','Body body body E',],

        ];

        foreach ($data as $items) {
            $post = new POST([
                'title' => $items[0],
                'body' => $items[1],
            ]);
            $post->save();
        }

    }
}
