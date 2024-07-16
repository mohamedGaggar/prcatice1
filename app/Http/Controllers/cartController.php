<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{


public function index(){


    $courses=Cart::all();
return view('users.cart',compact('courses'));



}




}
