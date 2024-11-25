<?php

use App\Http\Controllers\TvcAccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "<h1>Hello World, I'm Chung Trịnh </h1>";
});

#Redirect
Route::redirect('/here','/three');

Route::get('/three', function () {
    return "<h1>Redirect to three </h1>";
});


#Router return view
Route::get('/chung-trinh',function(){
    return view('chungtrinh');
});

#Router parameter
Route::get('/devmaster/{id}',function($id){
    return "<h1> Devmaster ".$id . "</h1>";
});

#Optional parameter
Route::get('/dev/{name?}',function($name="Chung Trịnh"){
    return "<h1> Xin chào ".$name . "</h1>";
});


Route::get('/tvc-account',[TvcAccountController::class,'index'])->name('tvcAccount.index');

Route::get('/tvc-account-create',[TvcAccountController::class,'create']);