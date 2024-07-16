<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){

        return view('users.login');
    }


public function login(request $request){

$data= $request->validate([

    'email' => 'required|email',
    'password' => 'required|string'
]);



$remember= $request['remember'] ? true : false;










if(auth::attempt($data,$remember)){

$request->session()->regenerate();

return redirect('users/home');


}else {
    return back()->withErrors('Error','password is not correct');
}




}


}
