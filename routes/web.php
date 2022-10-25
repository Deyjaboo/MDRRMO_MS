<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DataView;
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
    Route::get('dashboard',[DataView::class ,'dash_view']);

    Route::get('/sampledash', function () {
        return view('sampledash');
    });
    Route::get('Adduser',[UserController::class ,'user_show']);
   
    Route::get('/Employee', function () {
        return view('Employee');
    });
    
    Route::get('ActiveEmployee',[UserController::class ,'active_show']);
    Route::get('InactiveEmployee',[UserController::class ,'inactive_show']);

    Route::get('/NewReport', function () {
        return view('NewReport');
    });

    Route::get('/ReviewedReport', function () {
        return view('ReviewedReport');
    });

    Route::get('/Report', function () {
        return view('Report');
    });
    
    // Route::post('report_pass',[ReportController::class ,'store']);
  
 
});
//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth','isAdmin'])->name('dashboard');

//   Route::middleware(['auth'])->group(function(){
     
    Route::middleware('auth')->group(function () {
        Route::get('UserDash',[DataView::class ,'user_view']);
         
         Route::get('/addreport', function () {
            return view('addreport');
        });
        Route::post('report_pass',[ReportController::class ,'store']);
    });
//  });


require __DIR__.'/auth.php';
