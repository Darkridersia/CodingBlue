<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

Route::get('users/{users}', [Users::class, 'index']);

Route::get('users/{users}', [Users::class, 'loadView']);
