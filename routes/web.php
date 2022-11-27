<?php

use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParameterController;
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
Auth::routes(['verify'=>true]);
Route::get('/',
function(){
  return 'home';
}
);

Route::get('/test1', function () {
    return 'test1';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// Route::get('login', function () {
//     return 'login';
// });

// Route Parameter
Route::get('/test2/{id}', function ($id) {
    return 'test2'.$id;
});

Route::get('/test2/{id?}', function () {
    return 'test2';
});

// Route::get('/login', function () {
//     return 'login';
// })->name('login');

// Route Name
Route::namespace('Front')->group(

    function(){
        // all route on;y access controller or methodes in folder name Front
        route::get('user',[UserController::class,'showAdminName']);
    }
);

// Route Prefix
// users/show
Route::prefix('users')->group(

    function(){
        // all route on;y access controller or methodes in folder name Front
        route::get('show',[UserController::class,'showAdminName']);
    }
);
// or
route::group(['prefix'=>'users1','middleware'=>'auth'],function(){
    route::get('/',function(){
        return 'users1';
    });
    route::get('show',[UserController::class,'showAdminName']);
    
});

Route::get('users2', function () {
    return 'users2';
})->middleware('auth');


route::get('show1',[UserController::class,'showuser']);

route::get('show2',[UserController::class,'showuser1'])->middleware('auth');



// parameter

Route::get('param',[ParameterController::class,'index']);
Route::get('param1',[ParameterController::class,'indexdata']);
Route::get('param2',[ParameterController::class,'indexdata1']);
Route::get('paramforeach',[ParameterController::class,'indexdata2']);

// landing template
Route::get('landing',function(){

    return view('landing');
});

Route::get('landingmaster',function(){

    return view('landingmaster');
});





