<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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


/*Route::get('/','App\Http\Controllers\EventController@index')-> name('indexs');
      
//Route::view('/home','index');
//Route::view('add','addEvent')->name('addEvent');
Route::get('add',[EventController::class, 'create'])->name('addEvent');
//Route::view('/header','header.pagecoba');
//Route::view('/dalam','header.pagedalam.inidalam');
//Route::post('add', [EventController::class, 'store'])->name('event.store');
Route::post('add', 'App\Http\Controllers\EventController@store')->name('event.store');
Route::get('edit/{event}', [EventController::class, 'edit'])->name('event.edit');
//update
Route::patch('update/{event}', [EventController::class, 'update'])->name('event.update');
Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('event.delete');*/

Route::resource('event', EventController::class);
Route::resource('user', UserController::class);
Route::get('/', function () {
   return redirect()->route ('event.index');
});

//Route::resource('event', App\Http\Controllers\EventController@store);
//Route::resource('user',[UserController::class]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
