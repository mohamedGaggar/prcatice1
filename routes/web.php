<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\stripeController;
use App\Http\Controllers\profileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



route::get('admin/adminLogin',[adminController::class,'index']);
route::post('admin/adminLogin',[adminController::class,'adminLogin'])->name('admin.adminLogin');






route::middleware('admin')->group(function(){


    route::get('admin/adminPage',[adminController::class,'adminIndex']);

    route::post('admin/adminPage',[adminController::class,'adminCreate'])->name('admin.adminPage');

    route::get('admin/adminUpdate',[adminController::class,'adminUpdateIndex'])->name('admin.updateTable');


    route::get('admin/{id}/update',[adminController::class,'adminEditIndex']);
    route::put('admin/{id}/update',[adminController::class,'adminEdit']);
    route::get('admin/{id}/delete',[adminController::class,'adminDelete']);





});


route::get('users/register',[registerController::class,'index'])->name('registeration');
route::post('users/register',[registerController::class,'register'])->name('users.register');



route::get('users/login',[loginController::class,'index'])->name('login');


route::post('users/login',[loginController::class,'login'])->name('logger');


route::middleware('auth')->group(function(){

    route::get('users/home',[homeController::class,'index'])->name('home');

    route::post('users/home',[homeController::class,'homePost'])->name('homePost');


    route::get('users/cart',[cartController::class,'index'])->name('carts');

    route::post('users/cart',[stripeController::class,'checkout'])->name('cart.create');

    route::get('success',[stripeController::class,'success'])->name('success');

    route::get('cancel',[stripeController::class,'cancel'])->name('cancel');

    route::get('users/profile',[profileController::class,'index'])->name('users.profile');

});




