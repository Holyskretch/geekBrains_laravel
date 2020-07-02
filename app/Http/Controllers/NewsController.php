<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news =[
        [
            'id' => '1',
            'category'=>'economic',
            'title' => 'First news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '2',
            'category'=>'cinema',
            'title' => 'Second news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '3',
            'category'=>'investing',
            'title' => 'Third news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '4',
            'category'=>'accidents',
            'title' => 'Fourth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '5',
            'category'=>'interesting',
            'title' => 'Fifth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '6',
            'category'=>'economic',
            'title' => 'Sixth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '7',
            'category'=>'cinema',
            'title' => 'Seventh news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '8',
            'category'=>'investing',
            'title' => 'Eighth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '9',
            'category'=>'accidents',
            'title' => 'Ninth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
        [
            'id' => '10',
            'category'=>'interesting',
            'title' => 'Tenth news',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nihil.'
        ],
    ];

    public function index()
    {
        return view('news.index');
    }

    public function categories()
    {
        return view('news.categories', ['news' => $this->news]);

    }
    public function categoriesItem(string $c)
    {
        //echo $c;
        return view('news.categoriesItem', ['news' => $this->news, 'c' => $c]);
    }
    public function news(int $id)
    {
        //echo $id;
        return view('news.news',['news' => $this->news, 'id' => $id]);
    }
    public function authorization()
    {
        return view('news.authorization');
    }
}

