<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
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

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';


Route::get('login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('login',[AuthController::class,'doLogin'])->name('doLogin');
Route::post('logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');




Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/biens', [PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [PropertyController::class, 'show'])->name('property.show')->where(
    [
        'properties' => $idRegex,
        'slug' => $slugRegex
    ]
);

Route::get('/biens/{property}/contact', [PropertyController::class, 'contact'])->name('property.contact')->where(
    [
        'properties' => $idRegex
    ]
);
Route::prefix('admin')->middleware('auth')-> name('admin.')->group(function () {

    Route::resource('property', PropertyContoller::class)->except(['show']);
    Route::resource('option', OptionController::class)->except(['show']);
});
