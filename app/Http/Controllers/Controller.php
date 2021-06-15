<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function enter(){
        if (session('user') != null){
            return redirect('profile');
        }
        return view('enter');
    }

    public function login(){

        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $result = DB::selectOne('select * from users where email = :email', ['email' => $_POST['email']]);

        if ($result == null){
            return redirect('/enter')->with('error', "Votre compte n'existe pas")->withInput();
        }
        if (!Hash::check($_POST['password'], $result->password)){
            $result = false;
        }
        if ($result){
            session(['user' => $result]);
            if (session('user')->is_admin !== 0){
                return redirect('admin');
            }
            return redirect('/profile');
        }
        else{
            return redirect('/enter')->with('error', "Le mot de passe n'est pas correct")->withInput();
        }
    }

    public function register(){

        request()->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $_POST['password'] = Hash::make($_POST['password']);

        $result = DB::insert('insert into users (email, password) values (?, ?)', [$_POST['email'], $_POST['password']]);

        if ($result){
            return redirect('/enter');
        }
        else{
            return redirect('/enter')->with('error', "Quelque chose ne fonctionne pas ")->withInput();
        }

        session()->flash('status', 'success');
        session()->flash('message', "Inscription réussie, vous pouvez vous connectez !");

        return redirect('/enter');
    }

    public function logout(){

        if (session('user') != null){
            session(['user' => null]);
            return redirect('/home');
        }
        else{
            return redirect('/profile');
        }
    }

    public function profile(){
        if (session('user') != null){
            session()->flash('status', 'error');
            session()->flash('message', "Vous êtes déjà connectez !");

            return view('profile');
        }
        else{
            return view('enter');
        }
    }
}
