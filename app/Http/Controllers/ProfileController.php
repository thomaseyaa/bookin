<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function admin(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }
        return view('admin.adminDashboard');
    }

    public function profile(){

        if (session('user') == null){
            return view('auth');
        }
        return view('profile');
    }

    public function profileForm(){

        if (session('user') == null){
            return redirect('home');
        }
        return view('profileForm');
    }

    function updateUser(){

        if (session('user') == null){
            return redirect('home');
        }

        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ]);

        $result = DB::update('update users set firstname = ?, lastname = ?, email = ?  where id = ?', [$_POST['firstname'] , $_POST['lastname'], $_POST['email'], session('user')->id]);
        $user = DB::selectOne('select * from users where id = :id', ['id' => session('user')->id]);

        if ($result){
            session(['user'=> $user]);
        }

        session()->flash('status', 'success');
        session()->flash('message',"Modification enregistrée !");

        return redirect('/profile');
    }

    public function passwordForm(){

        if (session('user') == null){
            return redirect('home');
        }
        return view('passwordForm');
    }

    function updatePassword(){

        if (session('user') == null){
            return redirect('home');
        }

        request()->validate([
            'password' => 'required',
        ]);

        $_POST['password'] = Hash::make($_POST['password']);
        $result = DB::update('update users set password = ?  where id = ?', [$_POST['password'], session('user')->id]);
        $user = DB::selectOne('select * from users where id = :id', ['id' => session('user')->id]);

        if ($result){
            session(['user'=> $user]);
        }

        session()->flash('status', 'success');
        session()->flash('message',"Modification enregistrée");

        return redirect('/profile');
    }
}
