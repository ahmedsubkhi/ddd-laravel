<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['topicname'];

    /**
     * News of topic
     */
    public function news()
    {
        return $this->belongsToMany('App\Domain\Models\News', 'news_topics', 'topic_id', 'news_id');
    }

}
