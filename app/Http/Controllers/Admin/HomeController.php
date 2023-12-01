<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        $count_artilce = Article::all()->count();
        $count_Catergoryartilce = ArticleCategory::all()->count();
        $admins = User::all();
        return view('admin.index',compact('count_artilce','count_Catergoryartilce', 'admins'));
    }
}
