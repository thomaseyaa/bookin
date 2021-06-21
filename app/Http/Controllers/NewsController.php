<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showNews(){

        $allNews = DB::table('news')->where('published', 1)->get();
        return view('news')->with('allNews', $allNews);
    }

    public function showOneNews($id){

        $news = DB::table('news')->where('id', $id)->first();
        return view('article')->with('news', $news);
    }
}
