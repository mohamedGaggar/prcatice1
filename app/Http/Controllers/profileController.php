<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){

$user=auth::user();
$data=$user->purchasedCourses;

        return view('users.profile')->with(['data'=>$data]);
    }
}
