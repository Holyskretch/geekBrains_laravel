<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $categories = [
        [
            'id' => '1',
            'name' => 'Economic'
        ],
        [
            'id' => '2',
            'name' => 'Cinema'
        ],
        [
            'id' => '3',
            'name' => 'Investing'
        ],
        [
            'id' => '4',
            'name' => 'Accidents'
        ],
        [
            'id' => '5',
            'name' => 'Interesting'
        ],
    ];
    protected $news =[
        [
            'id' => '1',
            'category_id'=>'1',
            'title' => 'First news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '2',
            'category_id'=>'2',
            'title' => 'Second news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '3',
            'category_id'=>'3',
            'title' => 'Third news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '4',
            'category_id'=>'4',
            'title' => 'Fourth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '5',
            'category_id'=>'5',
            'title' => 'Fifth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '6',
            'category_id'=>'1',
            'title' => 'Sixth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '7',
            'category_id'=>'2',
            'title' => 'Seventh news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '8',
            'category_id'=>'3',
            'title' => 'Eighth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '9',
            'category_id'=>'4',
            'title' => 'Ninth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '10',
            'category_id'=>'5',
            'title' => 'Tenth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
    ];

    public function index()
    {
        return view('index', ['categories' => $this->categories]);
    }

//    public function categories()
//    {
//        return view('news.categories', ['news' => $this->news]);
//
//    }
    public function categoriesItem(string $categoryId)
    {
        //echo $c;
        return view('news.categoriesItem', ['categories' => $this->categories, 'news' => $this->news, 'categoryId' => $categoryId]);
    }
    public function news(int $id)
    {
        //echo $id;
        return view('news.news',['categories' => $this->categories, 'news' => $this->news, 'id' => $id]);
    }
    public function authorization()
    {
        return view('news.authorization', ['categories' => $this->categories]);
    }
}

