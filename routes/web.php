<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/deconnexion', function () {
    Session::flush();
    return view('auth.login');
});
Route::get('/profile', function () {
    return view('dashboard.profile');
});

Auth::routes();
Route::group( ['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.dashboard');


    Route::resources([
        'users' => UserController::class,
        'tasks' => TaskController::class,
        'statuses' => StatusController::class,
    ]);
});
