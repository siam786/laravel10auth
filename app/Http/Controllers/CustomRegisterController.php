<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterStoreRequest;
use App\Http\Requests\loginUserRequest;

class CustomRegisterController extends Controller
{
    public function RegisterFromShow()
    {
        return view('custome-auth.register');
    }
    public function RegisterUser(RegisterStoreRequest $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
        ]);
        //make credentials array
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($credentials)){
           $request->session()->regenerate();
           return redirect()->intended('home');
        };
        //return back with error
        return back()->withErrors([
            'email' =>'wrong credentials'
        ]);
    }
    public function loginFromShow()
    {
        return view('custome-auth.login');
    }

    public function loginUser(loginUserRequest $request)
    {
        //dd($request->all());

    //make credentials array
    $credentials = [
        'email'=>$request->email,
        'password'=>$request->password
    ];
    if(Auth::attempt($credentials,$request->filled('remember'))){
       $request->session()->regenerate();
       return redirect()->intended('home');
    };
    //return back with error
    return back()->withErrors([
        'email' =>'wrong credentials'
    ]);

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}