<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function categoriesItem(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(!$category){
            return abort(404);
        }
        return view('news.categoriesItem', ['category' => $category, 'categories' => $this->getAllCategories()]);
    }
    public function news(int $id)
    {
        $news = News::find($id);
        if (!$news){
            return abort(404);
        }
        $source = Source::all(); //where('id', $id)->first()
//dd($source);
        return view('news.news',['categories' => $this->getAllCategories(), 'news' => $news , 'source'=> $source]);
    }
    public function authorization()
    {
        return view('news.authorization', ['categories' => $this->getAllCategories()]);
    }
}

