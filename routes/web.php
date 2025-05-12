<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;

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

Route::get('/home/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});

Route::get('/contactus', function(){
    return view('contactUs');
});

Route::get('/aboutus', function(){
    return view('aboutUs');
    // return redirect('contactus');
});

Route::get('users/users/{users}', [Users::class, 'index']);
Route::get('users/users/{users}', [Users::class, 'loadView']);

Route::get('users/usercontroller', [UserController::class, 'index']);
Route::get('users/usercontroller', [UserController::class, 'testData']);
// Route::get('users/usercontroller/loadview', [UserController::class, 'loadView']);

// CRUD Operations
Route::get('/addUser', function(){
    return view('addUser');
});
// Route::post('/addUser', [UserController::class, 'addUser']);
Route::post('/users/usercontroller/{id}', [UserController::class, 'deleteUser']);
Route::get('/updateUser/{id}',[UserController::class, 'showUpdate']);
Route::post('/updateUser/{id}',[UserController::class, 'updateUser']);

Route::post('/addUser', [UserController::class, 'signUp']);
Route::get('/hasOne',[UserController::class, "OneToOne"]);
Route::get('/hasMany',[UserController::class, 'OneToMany']);
