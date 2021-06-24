<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\SendMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    // Login
    public function login(LoginRequest $request){

        $user = User::where('email', $request->email)->first();

        if ($user == null){
            return response()->json([
                "error" => "Les données saisies sont incorrectes."
            ], 401);
        }
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                "error" => "Les données saisies sont incorrectes."
            ], 401);
        }
        if ($user){
            $user->tokens()->where('tokenable_id',  $user->id)->delete();
        }

        return response()->json([
            'token' => Str::random(40),
            "email" => $user->email
        ], 200);
    }

    // Register
    public function register(RegisterRequest $request){

        $exists = User::where('email', $request->email)->exists();

        if ($exists) {
            return response()->json([
                "error" => "Email déjà utilisé."
            ], 409);
        }
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'token' => Str::random(40),
            "email" => $user->email,
            "created_at" => $user->created_at
        ], 200);
    }

    // profile
    public function profile(Request $request){

        $user = DB::table('users')->where('id', $request->id)->first();

        return response()->json([
            "email" => $user->email,
        ], 200);
    }

    // Logout
    public function logout(){

        if (!session('user') == null){
            session(['user' => null]);
        }
        return response()->json( [
            'message' => "Déconnecté !"
        ], 204);
    }

    // Show all news
    public function showNews(){

        $allNews = DB::table('news')->where('published', 1)->get();
        return response()->json([
            'success' => true,
            $allNews
        ], 200);
    }

    // Show one news
    public function showOneNews($id){

        $news = DB::table('news')->where('id', $id)->first();
        return response()->json([
            'success' => true,
            $news
        ], 200);
    }

    // Send message
    public function sendMessage(ContactRequest $request){

        Mail::to("75ecc7fe2d-4f6a7b@inbox.mailtrap.io")->send(new SendMessage($request));
        return response()->json([
            'success' => true,
            'message' => "Message envoyé !"
        ], 200);
    }
}
