<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function index()
    {
        $news = (new News())->getAllNews();
        $categories = (new News())->getAllCategories();
        return view('index', ['categories' => $categories, 'news'=>$news]);
    }


    public function categoriesItem(string $categoryId)
    {
        $news = (new News())->getAllNews();
        $categories = (new News())->getAllCategories();
        return view('news.categoriesItem', ['categories' => $categories, 'news' => $news, 'categoryId' => $categoryId]);
    }
    public function news(int $id)
    {
        $news = (new News())->getOneNews($id);
        $categories = (new News())->getAllCategories();
        return view('news.news',['categories' => $categories, 'news' => $news]);
    }
    public function authorization()
    {
        $categories = (new News())->getAllCategories();
        return view('news.authorization', ['categories' => $categories]);
    }
}

