<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(){

        if (!session('user') == null){
            return redirect('profile');
        }
        return view('auth');
    }

    public function login(LoginRequest $request){

        $result = DB::selectOne('select * from users where email = :email', ['email' => $_POST['email']]);

        if ($result == null){
            return redirect('/auth')->with('error', "Votre compte n'existe pas")->withInput();
        }
        if (!Hash::check($_POST['password'], $result->password)){
            $result = false;
        }
        if ($result){
            session(['user' => $result]);
            if (session('user')->is_admin !== 0){
                return redirect('admin');
            }
            return redirect('/price');
        }
        else{
            return redirect('/auth')->with('error', "Le mot de passe n'est pas correct")->withInput();
        }
    }

    public function register(RegisterRequest $request){

        $_POST['password'] = Hash::make($_POST['password']);

        $result = DB::insert('insert into users (email, password) values (?, ?)', [$_POST['email'], $_POST['password']]);

        if ($result){
            $connect = DB::selectOne('select * from users where email = :email', ['email' => $_POST['email']]);
            session(['user' => $connect]);
            return redirect('/price');
        }
        else{
            return redirect('/auth')->with('error', "Quelque chose ne fonctionne pas ")->withInput();
        }

        return redirect('/price')->with('success', "Inscription réussie, vous pouvez vous connectez !");
    }

    public function logout(){

        if (!session('user') == null){
            session(['user' => null]);
            return redirect('/home');
        }
        else{
            return redirect('/profile');
        }
    }

    public function passwordRecovery(){

        if (!session('user') == null){
            return redirect('profile');
        }
        return view('auth');
    }
}
