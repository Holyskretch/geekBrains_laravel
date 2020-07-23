<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAllNews(){
        return News::orderBy('updated_at', 'desc')->paginate(10);
    }
    public function getAllCategories(){
        return Category::all();
    }
    public function getAllSources(){
        return Source::all();
    }
    public function getAllUsers(){
        return User::orderBy('updated_at', 'desc')->paginate(10);
    }
}
