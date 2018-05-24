<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body', 'status'];

    /**
     * News topic
     */
    public function topic()
    {
        return $this->belongsToMany('App\Domain\Models\Topic', 'news_topics', 'news_id', 'topic_id');
    }

}
