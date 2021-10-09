<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);

//Admin functions
Route::get('/users',[AdminController::class,'user']);
//delete user
Route::get('/delete/{id}',[AdminController::class,'delete']);
//foodmenu
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
//upload food
Route::post('/uploadfood',[AdminController::class,'upload']);
//delete menu
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
//update menu
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
//update new value
Route::post('/update/{id}',[AdminController::class,'update']);
//reservation
Route::post('/reservation',[AdminController::class,'reservation']);
//view reservation
Route::get('/viewreservation',[AdminController::class,'viewreservation']);
//vies chef
Route::get('/viewchefs',[AdminController::class,'viewchefs']);
//add chef
Route::post('/uploadchef',[AdminController::class,'uploadchef']);
//update chef
Route::get('/updatechef/{id}',[AdminController::class,'updatechef']);
//sendupdate new chef data
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef']);
//delete chef
Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);
//add items to cart
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
//show cart items
Route::get('/showcart/{id}',[HomeController::class,'showcart']);
//remove cartitem
Route::get('/remove/{id}',[HomeController::class,'remove']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
