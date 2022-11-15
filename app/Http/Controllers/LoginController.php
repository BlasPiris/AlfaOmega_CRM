<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function register(Request $request){
        // $user=new User();
        // $user->name="Blas";
        // $user->user="bpiris";
        // $user->email="a@a.com";
        // $user->password=Hash::make("1234");

        // $user->save();

        //Auth::login($user);
    }
    
    public function login(Request $request){

        $credentials=[
            "user" =>$request->user,
            "password" => $request->password,
            "activate" =>true
        ];

        //$remember=($request->has('remember')?true:false);

       if(Auth::attempt($credentials)){
        $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }else{
            return redirect()->back()->withErrors(['form' => 'Error login']
            );
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
