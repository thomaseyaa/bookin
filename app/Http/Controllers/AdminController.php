<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function checkAdmin(){
        if (!session('user')->is_admin){
            return redirect('404');
        }
    }

    public function admin(){
        if (!session('user')->is_admin){
            return redirect('404');
        }
        return view('admin.adminDashboard');
    }
}
