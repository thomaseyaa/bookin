<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewRequest;
use App\Models\Artcile;
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

    public function adminAddNewForm(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        return view('admin.adminNewForm');
    }

    public function adminAddNew(AddNewRequest $request){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        DB::table('news')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'published' => $request->published,
        ]);

        return redirect('newsList');
    }

    public function adminUpdateNewForm($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $new = DB::table('news')->where('id', $id)->first();
        return view('admin.adminNewForm')->with('new', $new);
    }

    public function adminDeleteNew($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        DB::table('news')->where('id', $id)->delete();
        return redirect('newsList');
    }
}
