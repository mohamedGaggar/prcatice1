<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Stripe\Stripe;
use App\Models\Course;




class stripeController extends Controller
{

public function checkout(){

$user=auth::user();
$cart= cart::where('user_id',$user->id)->first();


Stripe::setApiKey(env('STRIPE_SK'));


$session= session::create([
    'payment_method_types'=>['card'],

    'line_items'=>[
        [

'price_data'=>[

    'currency'=>'usd',
    'product_data'=>[
        'name'=>$cart->title,
    ],
    'unit_amount'=>$cart->price * 100,

],
    'quantity'=> 1,


        ]
],

'mode'=>'payment',
'success_url'=> route('success'),
'cancel_url'=> route('cancel'),


]);



return redirect()->away($session->url);
}


public function success(){

$user=auth::user();

if (!$user) {
    return redirect()->route('login')->with('error','you must be logged in to complete the purchase');
}
$cartId= Cart::where('user_id',auth::id())->get();

foreach ($cartId as $item) {


$course=Course::find($item->id);

if (!$course) {
    continue;
}



$user->purchasedCourses()->attach($user->id,['status'=>'purchased']);
$item->delete();

$user->selectedCourses()->attach($course->id,['status'=>'selected']);


}



return redirect()->route('users.profile')->with('success','payment has been done successfully');

}





public function cancel(){

    return redirect()->route('cart')->with('Error','payment has been cancelled');
}


















}
