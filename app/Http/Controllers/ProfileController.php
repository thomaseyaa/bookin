<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        if (!empty(session('user')->stripe_id)){
            $url = User::find(session('user')->id)->billingPortalUrl(route('profile'));
            return view('profile.profile')->with('url', $url);
        }

        return view('profile.profile');
    }

    public function profileForm(){

        if (session('user') == null){
            return redirect('home');
        }
        return view('profile.profileForm');
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
        return view('profile.passwordForm');
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
