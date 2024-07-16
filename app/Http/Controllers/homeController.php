<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Cart;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){


$courses=course::all();

        return view('users.home',compact('courses'));
    }


public function homePost(request $request){

$data=$request->validate([
'title'=>'required|string',
'attachment'=>'nullable|string',

    'price'=>'required|string',
    'url'=>'required|string'

]);

$user=auth::user();


$courseInCart=Cart::where('user_id',$user->id)->where('title',$data['title'])->first();



if($courseInCart){
return back()->withErrors('Error','Course has already been selected');

}
else {

    $data['user_id']=$user->id;

    Cart::create($data);

    return back()->with('success','course has been selected successfully');
}



}













}
