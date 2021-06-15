<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function checkAdmin(){
        if (!session('user')->is_admin){
            return redirect('403');
        }
    }

    public function admin(){
        if (session('user') == null){
            return view('enter');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }
        return view('admin.adminDashboard');
    }

    public function usersList(){
        if (session('user') == null){
            return view('enter');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $allUsers = DB::table('users')->get();
        return view('admin.usersList')->with('allUsers', $allUsers);
    }

    public function adminUserForm($id=0){
        if (session('user') == null){
            return view('enter');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        dd($id);
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.adminUserForm')->with('user', $user);
    }

    public function adminAddUser(Request $request){
        if (session('user') == null){
            return view('enter');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        $password = Hash::make($request->password);
        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $password
        ]);

        return redirect('usersList');
    }

    public function adminUpdateUser(Request $request, $id){
        if (session('user') == null){
            return view('enter');
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
            return view('enter');
        }
        if (!session('user')->is_admin){
            return redirect('403');
        }

        DB::table('users')->where('id', $id)->delete();
        return redirect('usersList');
    }
}
