<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function getAllNews()
    {
        return \DB::table('news')->get();
    }

    public function getAllCategories()
    {
        return \DB::table('categories')->get();
    }

    public function getOneNews(int $id)
    {
        //return \DB::table('news')->join('source', 'news.source_id', '=', 'source.source_id')->find($id);
        return \DB::selectOne('SELECT * FROM `news` RIGHT JOIN `source` ON news.source_id = source.source_id WHERE news_id= :id', ['id'=>$id]);
    }

}
