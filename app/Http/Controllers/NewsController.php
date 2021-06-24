<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showNews(){

        $allNews = DB::table('news')->where('published', 1)->get();
        return view('news.news')->with('allNews', $allNews);
    }

    public function showOneNews($id){

        $news = DB::table('news')->where('id', $id)->first();
        return view('news.article')->with('news', $news);
    }

    public function searchNews(Request $request){

        $result = $request->input('searchBar');
        $allNews = News::where('title', 'LIKE', "%{$result}%")->orWhere('body', 'LIKE', "%{$result}%")->get();

        return view('news.news')->with('allNews', $allNews);
    }
}
