<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;

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

Route::get('test/{name}', function ($name) {
    $users = [
        "ali",
        "reza"
    ];

    return view('test', ['name' => $name, 'users' => $users]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->name('admin.')->prefix('adminn')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
    });

// Route::get('/admin', [IndexController::class, 'index'])
//     ->name('admin.index');

// Route::get('/admin', function () {
//     return "view('admin.index')";
// });


// Route::get('/aaa', [IndexController::class, 'index']);
