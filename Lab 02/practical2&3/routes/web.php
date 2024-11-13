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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('aboutUs');
});
Route::view("/contact","contactUs");


//Route::get('/home', function ($username) {return view('welcome',['username'=>$username]);});


use App\Http\Controllers\UserController;
Route::get('users',[UserController::class,'index']);
Route::get('users01/{user}',[UserController::class,'index01']);
Route::get('users02/{user}',[UserController::class,'index02']);


Route::get('user/{user}',[UserController::class,'loadView']); 
Route::get('user01/{user}',[UserController::class,'loadView01']);

Route::get('loadSum/{num1}&{num2}',[UserController::class,'loadSum']);  // Route for adding two numbers with parameters
Route::get('sum/{num1}&{num2}',[UserController::class,'sum']);        // Another route for adding two numbers with parameters (might be a duplicate)


Route::get('/testData',[UserController::class,'testData']);    


Route::view('/addUser','addUser'); // View for adding a user (likely using a Blade template)
Route::post('/addUser',[UserController::class,'addUser']); // POST request to handle user addition form submission


Route::get('/deleteUser/{id}',[UserController::class,'deleteUser']); // Route for user deletion with an ID parameter


Route::get('/updateUserNewData/{id}',[UserController::class,'showUpdate']); // Route to display user update form with ID parameter
Route::post('/updateUsers',[UserController::class,'updateUser']);  // POST request to handle user update form submission


Route::view('/signUp','signUp'); // View for user signup (likely using a Blade template)
Route::post('/signUp',[UserController::class,'signUp01']);  // POST request to handle user signup form submission


Route::get('/showOne',[UserController::class,'OneToOne']);
Route::get('/showMany',[UserController::class,'OneToMany']);


//Route::view('/login','loginPage');
//Route::post('/login',[UserController::class,'loginUser01']);


Route::view('noaccess','noaccess');


//Group Middleware
//Route::group(['middleware'=>['protectedpage']], function () {
//   Route::view('/login','loginPage');
//    Route::view('/signUp','signUp');
//});


//Route Middleware
//Check the age if less than 18 turn to no access
//Route::view('/signUp','signUp')->middleware('protectedpage');


// Login route with session check and redirection
Route::get("login", function(){
    if(session()->has('user')) {
      return redirect("home");
    }
    return view('loginPage');
  });
  Route::post("login", [UserController::class, 'loginUSer01']); // POST request to handle user login form submission (typo in 'loginUSer')

  // Logout route with session destruction
Route::get("logout", function(){
    if(session()->has('user')) {
      session()->pull('user');
    }
    return view('loginPage');
  });