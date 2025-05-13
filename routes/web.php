<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ageCheck;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// The below is the default route for the welcome screen but there is others welcome screen that is using diff url name but I put this one as the default for easier navigation
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});

Route::get('/contactus', function () {
    return view('contactUs');
});

Route::get('/aboutus', function () {
    return view('aboutUs');
    // return redirect('contactus');
});

Route::get('users/users/{users}', [Users::class, 'index']);
Route::get('users/users/{users}', [Users::class, 'loadView']);

Route::get('users/usercontroller', [UserController::class, 'index']);
Route::get('users/usercontroller', [UserController::class, 'testData']);
// Route::get('users/usercontroller/loadview', [UserController::class, 'loadView']);

// CRUD Operations
Route::get('/addUser', function () {
    return view('addUser');
});
// Route::post('/addUser', [UserController::class, 'addUser']);
Route::post('/users/usercontroller/{id}', [UserController::class, 'deleteUser']);
Route::get('/updateUser/{id}', [UserController::class, 'showUpdate']);
Route::post('/updateUser/{id}', [UserController::class, 'updateUser']);

// One to One & One to Many Relationships
Route::post('/addUser', [UserController::class, 'signUp']);
Route::get('/hasOne', [UserController::class, "OneToOne"]);
Route::get('/hasMany', [UserController::class, 'OneToMany']);

// Validation and a bit of session mixed in
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

// Middleware
Route::get('/', function () {
    return 'Welcome to the Homepage!';
});
Route::get('/noaccess', function () {
    return 'U are not allowed to access this page';
});

Route::group(['middleware' => ['protectedPage']], function () {
    Route::view("adduser", "adduser");
    Route::view("contactus", "contactus");
});

Route::view('login', 'login')->middleware('protectedPage');

// Session
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('welcome');
    }
    return view('login');
});

// U can direct use this url and it will direct log u out
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Authentication
Route::view('/', 'welcome');

Auth::routes();
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/author', [LoginController::class, 'showAuthorLoginForm']);
Route::get(
    '/register/admin',
    [RegisterController::class, 'showAdminRegisterForm']
);
Route::get(
    '/register/author',
    [RegisterController::class, 'showAuthorRegisterForm']
);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/author', [LoginController::class, 'authorLogin']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::post('/register/author', [RegisterController::class, 'createAuthor']);
Route::group(['middleware' => 'auth:author'], function () {
    Route::view('/author', 'author');
});
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
Route::get('logout', [LoginController::class, 'logout']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
