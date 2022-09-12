<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return Redirect::to('login');
});

// Route::get('/', function () {
//     return view('auth.login');
// })->name('auth.login');

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });

Route::middleware('auth','isAdmin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/sampledash', function () {
        return view('sampledash');
    });

    Route::get('Adduser',[UserController::class ,'user_show']);
   
    Route::get('/InactiveEmployee', function () {
        return view('InactiveEmployee');
    });
 
});
//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth','isAdmin'])->name('dashboard');

//   Route::middleware(['auth'])->group(function(){
     
    Route::middleware('auth')->group(function () {
        Route::get('/UserDash', function () {
            return view('UserDash');
         });
    });
//  });

Route::get('/Employee', function () {
    return view('Employee');
});

Route::get('/ActiveEmployee', function () {
    return view('ActiveEmployee');
});

Route::get('/Report', function () {
    return view('Report');
});

Route::get('/addreport', function () {
    return view('addreport');
});
require __DIR__.'/auth.php';
