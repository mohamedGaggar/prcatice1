<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){

        return view('users.register');
    }


    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|regex:/^[a-z]{3,} [a-z]+$/',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);



try {
    $data['password']=Hash::make($data['password']);
    user::create($data);
    return back()->with('success','account has been registered successfully');
} catch (\Throwable $th) {

if(auth::attempt($data)){


        return back()->withErrors('Errors','account does not match the pattern');
}
}

    }


















}
