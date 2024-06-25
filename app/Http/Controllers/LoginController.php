<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $user = User::where('email',$email)->first();
        if($user){
            $hashPassword = $user->password;
            if(Hash::check($password, $hashPassword)){
                dd('Login Successfully');
            }else{
                dd('Password not match');
            }
        }else{
            dd('User not found');
        }
    }
}
