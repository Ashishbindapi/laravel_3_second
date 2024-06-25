<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create()
    {
        $data = [
            "name" => 'Test3',
            "username" => 'Test User3',
            "email" => 'test@gmail.com',
            "password" => '123456789',
            "gender" => 'male',
            "phone" => 8888888888,
            "status" => 0,
            "created_at" => now(),
            "updated_at" => now(),
        ];
        
        DB::table('users')->insert($data);
        
        dd("User Created Successfully.");
    }

    public function list()
    {
        $user = Auth::user();
        $users = DB::table('users')->get();
        return view('user-list', compact('users','user'));
    }

    public function update()
    {
        $data = [
            "name" => 'Test',
            "username" => 'Test User',
            "password" => '123456789',
            "gender" => 'male',
            "phone" => 8888888888,
            "status" => 0,
            "created_at" => now(),
            "updated_at" => now(),
        ];
        
        DB::table('users')->where('id',1)->update($data);
        
        dd("User Update Successfully.");
    }

    public function delete()
    {
        DB::table('users')->where('id',1)->delete();
        dd("User delete Successfully.");
    }
}
