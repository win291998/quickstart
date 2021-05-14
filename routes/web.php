<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Tasks;
use Illuminate\Support\Facades\Validator;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
//dùng sai cái

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

Route::get('/',[TaskController::class,'index']);

Route::post('/task',[TaskController::class,'addTask']);

Route::delete('/task/{task}',[TaskController::class,'deleteTask']);
