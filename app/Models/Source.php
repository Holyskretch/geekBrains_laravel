<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = 'sources';
    protected $primaryKey = 'id';
    protected $fillable = ['sourceName'];

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_to_source','source_id',
            'news_id', 'id');
    }
}
