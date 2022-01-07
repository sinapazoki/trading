<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::prefix('admin')->group(function () {

    Route::view('/', 'admin.home')->name('admin.home');
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::view('filemanager', 'admin.filemanager')->name('filemanager');
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});



require __DIR__.'/auth.php';
