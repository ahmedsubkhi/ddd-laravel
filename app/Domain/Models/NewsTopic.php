<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTopic extends Model
{
    protected $fillable = ['news_id', 'topic_id'];

    /**
     * News of topic
     */
    public function news()
    {
         return $this->belongsTo('App\Domain\Models\News');
    }

    public function topic()
    {
         return $this->news->belongsTo('App\Domain\Models\Topic');
    }

}
