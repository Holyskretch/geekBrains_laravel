<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'summary', 'text'];

    public function categories()
    {
        return $this->belongsToMany(News::class, 'news_to_categories','news_id',
            'category_id', 'id');
    }

    public function sources()
    {
        return $this->belongsToMany(News::class, 'news_to_source','news_id',
            'source_id', 'id');
    }
}
