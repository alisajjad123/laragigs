<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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
//All Listings

Route::get('/',[ListingController::class,'index']);

//sShow create form

Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//Store Listing Data

Route::post('/listings',[ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [listingController::class, 'edit'])->middleware('auth');

//Update Listing

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listings

Route::get('/listings/{listing}',[ListingController::class, 'show']);

// Show Register/Create Form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
 Route::post('/users', [UserController::class, 'store']);

 //Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Log in Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in User

Route::post('/users/authenticate', [UserController::class, 'authenticate']);



//Route::get('/hello',function (){
//   return response('<h1>Hello World<h1/>', 200)
//       ->header('Content-type', 'text/Plain')
//       ->header('foo','bar');
//});
//Route::get('/posts/{id}', function ($id){
//    //die and dump to show any value like debugging
////    ddd($id);
//    return response('Post '.$id);
//})->where('id','[0-9]+');
//Route::get('/search', function (Request $request){
//    return $request->name.' '.$request->city.' '.$request->age;
//});
