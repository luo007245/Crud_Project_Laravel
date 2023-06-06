<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

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
    return view('crud');
});
//Route:: view('/','dataRead');

Route:: post('insertData',[crudcontroller::class,'insert']);
Route::get('/',[crudcontroller::class,'readdata']);
Route::view('update','updateview');
Route::get('updatedelete',[crudcontroller::class,'updateanddelete']);
Route::get('updatedata',[crudcontroller::class,'update']);