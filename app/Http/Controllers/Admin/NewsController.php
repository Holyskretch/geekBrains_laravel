<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.allNews',['news'=> $this->getAllNews()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createNews',
            ['categories' => $this->getAllCategories(), 'sources' => $this->getAllSources()]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = News::create($request->validated());
        $c = $request['categoryId'];
        $category = Category::find($c);
        $news->categories()->attach($category);

        $s = $request->input('sourceId');
        $source = Source::find($s);

        $news->sources()->attach($source);
        if($news) {
            return redirect()->route('news.index');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.editNews', ['news' => $news]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\NewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->title = $request->input('title');
        $news->summary = $request->input('summary');
        $news->text = $request->input('text');
        if ($news->save()) {
            return redirect()->route('news.index');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //Поправить, не работает
//        $news->categories()->detach();
//        $news->sources()->detach();
//        $news->delete();
//        return redirect(route('news.index'));
    }
}
