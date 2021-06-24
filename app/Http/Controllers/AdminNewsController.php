<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    public function newsList(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $allNews = DB::table('news')->get();
        return view('admin.newsList')->with('allNews', $allNews);
    }

    public function adminAddNewsForm(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        return view('admin.adminNewsForm');
    }

    public function adminAddNews(NewsRequest $request){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $result = $request->img->storeOnCloudinary();

        News::insert([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'img_url' => $result->getSecurePath(),
            'img_id' => $result->getPublicId(),
            'published' => $request->published == 'true' ? true : false,
        ]);

        return redirect('newsList');
    }

    public function adminUpdateNewsForm($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $news = News::where('id', $id)->first();
        return view('admin.adminNewsForm')->with('news', $news);
    }

    public function adminUpdateNews(NewsRequest $request, $id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $result = $request->img->storeOnCloudinary();

        News::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'img_url' => $result->getSecurePath(),
            'img_id' => $result->getPublicId(),
            'published' => $request->published == 'true' ? true : false,
        ]);

        return redirect('newsList');
    }

    public function adminDeleteNews($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $news = News::where('id', $id)->get();
        $result = cloudinary()->destroy($news[0]->img_id);

        News::where('id', $id)->delete();
        return redirect('newsList');
    }
}
