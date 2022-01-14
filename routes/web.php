<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PrivateController;

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

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::view('/', 'admin.home')->name('admin.home');
    Route::get('user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('page', [PageController::class, 'index'])->name('admin.page.index');
    Route::get('tag', [TagController::class, 'index'])->name('admin.tag.index');
    Route::get('page/edit/{page}', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::put('page/update/{page}', [PageController::class, 'update'])->name('admin.page.update');
    Route::view('filemanager', 'admin.filemanager')->name('filemanager');
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});
Route::get('pages/{page}', [PageController::class, 'show'])->name('page.show');



require __DIR__.'/auth.php';
