<?php

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
Route::get('foo',function(){
    return "foo page";
});
Route::redirect('bar','foo');
Route::view('landing','welcome');
Route::get('/user/{user_id?}', function ($user_id =''){
   echo $user_id;

})->name('user');
Route::prefix('admin')->group(function(){

});