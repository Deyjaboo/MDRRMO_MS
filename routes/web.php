<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DataView;
use App\Http\Controllers\ExportController;
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

    Route::get('NewReport',[ReportController::class ,'NewReport_show']);
    Route::get('ReviewedReport',[ReportController::class ,'ReviewedReport_show']);


    Route::get('/Report', function () {
        return view('Report');
    });

    Route::get('/EditReport', function () {
        return view('EditReport');
    });
    Route::get('clickedit/{id}',[ReportController::class ,'edit_function']);
    // Route::post('report_pass',[ReportController::class ,'store']);
    
   
    //Export Controller
    Route::get('Export',[ExportController::class ,'report_show']);
    Route::get('/search/', [ExportController::class ,'search'])->name('search');
    Route::get('ClearExport',[ExportController::class ,'refresh']);
    Route::get('/export_data',[ExportController::class ,'export']);

    //User Controller
    Route::post('EditEmployee/{id}',[UserController::class ,'edit_employee'])->name('EditEmployee');
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

        // Route::get('/Export', function () {
        //     return view('Export');
        // });
      

        Route::get('/EditReport', function () {
            return view('EditReport');
        });
        Route::post('report_pass',[ReportController::class ,'store']);
    });
//  });
Route::get('ViewReport/{id}',[ReportController::class ,'View_Report_Details']);
Route::get('EditReport/{id}',[ReportController::class ,'Edit_Report_Details']);

Route::post('UpdateReport/{id}',[ReportController::class ,'update_report'])->name('UpdateReport');
require __DIR__.'/auth.php';
