<?php

use Illuminate\Database\Seeder;
use App\Domain\Models\NewsTopic;

class NewsTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //NewsTopic::truncate();

        NewsTopic::create([
            'news_id' => 1,
            'topic_id' => 1,
        ]);
        NewsTopic::create([
            'news_id' => 1,
            'topic_id' => 2,
        ]);
        NewsTopic::create([
            'news_id' => 1,
            'topic_id' => 3,
        ]);
        NewsTopic::create([
            'news_id' => 2,
            'topic_id' => 2,
        ]);
        NewsTopic::create([
            'news_id' => 2,
            'topic_id' => 3,
        ]);
        NewsTopic::create([
            'news_id' => 3,
            'topic_id' => 2,
        ]);
        NewsTopic::create([
            'news_id' => 3,
            'topic_id' => 3,
        ]);
    }
}
