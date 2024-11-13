<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\UserController;

Route::get('users/{user}',[UserController::class,'index']);
Route::get('users/{user}',[UserController::class,'loadView']); // Duplicate route, likely a typo
Route::get('loadSum/{num1}&{num2}',[UserController::class,'loadSum']);  // Route for adding two numbers with parameters
Route::get('sum/{num1}&{num2}',[UserController::class,'sum']);        // Another route for adding two numbers with parameters (might be a duplicate)
Route::get('/testData',[UserController::class,'testData']);            // Route for retrieving test data

Route::view('/addUser','addUser'); // View for adding a user (likely using a Blade template)
Route::post('/addUser',[UserController::class,'addUser']); // POST request to handle user addition form submission

Route::get('/deleteUser/{id}',[UserController::class,'deleteUser']); // Route for user deletion with an ID parameter

Route::get('/updateUserNewData/{id}',[UserController::class,'showUpdate']); // Route to display user update form with ID parameter
Route::post('/updateUsers',[UserController::class,'updateUser']);  // POST request to handle user update form submission

Route::view('/signUp','signUp'); // View for user signup (likely using a Blade template)
Route::post('/signUp',[UserController::class,'signUp']);  // POST request to handle user signup form submission

Route::get('/showOne',[UserController::class,'OneToOne']);
Route::get('/showMany',[UserController::class,'OneToMany']);

//Route::view('/login','loginPage');
//Route::post('/login',[UserController::class,'loginUser']);

// Login route with session check and redirection
Route::get("login", function(){
  if(session()->has('user')) {
    return redirect("home");
  }
  return view('loginPage');
});
Route::post("login", [UserController::class, 'loginUSer']); // POST request to handle user login form submission (typo in 'loginUSer')

// Logout route with session destruction
Route::get("logout", function(){
  if(session()->has('user')) {
    session()->pull('user');
  }
  return view('loginPage');
});

//Route Middleware
//Check the age if less than 18 turn to no access
//Route::view('/signUp','signUp')->middleware('protectedpage');

//Group Middleware
//Route::group(['middleware'=>['protectedpage']], function () {
//   Route::view('/login','loginPage');
//    Route::view('/signUp','signUp');
//});

Route::get('/about', function () {
    return view('about');
});

Route::view("/contact","contact");

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/user/{username}', function ($username) {
    return view('user',['username'=>$username]);
});


