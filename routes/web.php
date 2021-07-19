<?php


use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
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



Route::post('/test/testForm', [AjaxController::class, 'forPostAjax'])->name('postAjax');

Route::get('/test/testForm', [HomeController::class, 'testForm'])->name('forAjax');

//Route::get('/test/testForm', [AjaxController::class, 'forGetAjax'])->name('forAjax');

Route::get('/test/{id}', [HomeController::class, 'testDetail']);

Route::get('/test', [HomeController::class, 'test']);

Route::get('/', [HomeController::class, 'index'] );



//убрать после теста
Route::get('/postRec', [TestController::class, 'postTest']);
Route::post('/postRectext', [TestController::class, 'postTest2'])->name('postTest2');


