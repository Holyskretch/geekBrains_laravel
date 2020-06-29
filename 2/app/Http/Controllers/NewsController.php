<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $News =[
        [
            'id' => '1',
            'title' => 'First news',
            'text' => 'description'
        ],
        [
            'id' => '2',
            'title' => 'Second news',
            'text' => 'description'
        ],
        [
            'id' => '3',
            'title' => 'Third news',
            'text' => 'description'
        ],
        [
            'id' => '4',
            'title' => 'Fourth news',
            'text' => 'description'
        ],
        [
            'id' => '5',
            'title' => 'Fifth news',
            'text' => 'description'
        ],
    ];
    private $categories = [
        ['categories'=>'economic'],
        ['categories'=>'cinema'],
        ['categories'=>'investing'],
        ['categories'=>'accidents'],
        ['categories'=>'interesting']
    ];

    public function index()
    {
        return view('news.index');
    }

    public function categories()
    {
        return view('news.categories', ['categories'=> $this->categories]);

    }
    public function categoriesItem()
    {
        return view('news.categoriesItem', ['news' => $this->news]);
    }
    public function news()
    {
        return view('news.news');
    }
    public function authorization()
    {
        return view('news.authorization');
    }
    public function newsOne($id)
    {
        $news = $this->getNewsById($id);
    }

    private function getNewsById($id)
    {
        foreach ($this->news as $news){
            if($news['id'] == $id){
                return $news;
            }
        }
    }
}

