<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    public function usersList(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $allUsers = DB::table('users')->get();
        return view('admin.usersList')->with('allUsers', $allUsers);
    }

    public function adminAddUserForm(){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        return view('admin.adminUserForm');
    }

    public function adminAddUser(Request $request){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $password = Hash::make($request->password);

        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $password,
        ]);

        return redirect('usersList');
    }

    public function adminUserForm($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.adminUserForm')->with('user', $user);
    }

    public function adminUpdateUser(Request $request, $id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ]);

        if($request->password == null){
            User::where('id', $id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
            ]);
        }
        else{
            User::where('id', $id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect('usersList');
    }

    public function adminDeleteUser($id){

        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        DB::table('users')->where('id', $id)->delete();
        return redirect('usersList');
    }
}
