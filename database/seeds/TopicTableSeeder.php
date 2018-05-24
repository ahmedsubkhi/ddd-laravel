<?php

use Illuminate\Database\Seeder;
use App\Domain\Models\Topic;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create([
            'topicname' => 'pemilu',
        ]);
        Topic::create([
            'topicname' => 'politik',
        ]);
        Topic::create([
            'topicname' => 'pemerintahan',
        ]);
    }
}
