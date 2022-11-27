<?php

use App\Http\Controllers\Front\AdminController;
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

// Route::get('/admin', function () {
//     return 'Welcome Admin';
// });

Route::get('/admin1',[AdminController::class,'showAdminName']);
Route::get('/admin2',[AdminController::class,'showAdminName1']);
Route::get('/admin3',[AdminController::class,'showAdminName2']);


