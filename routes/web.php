<?php

use App\Http\Controllers\Admin\PropertyContoller;
use App\Http\Controllers\PostControler;
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

/* Route::get('/',[PostControler::class,'index'])->name('posts.index');
Route::post('/posts',[PostControler::class,'store']); */

Route::prefix('admin')->name('admin.') ->group(function(){
    
 Route::resource('property', PropertyContoller::class)->except(['show']);
});