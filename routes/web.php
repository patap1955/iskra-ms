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

//Route::get("/", function () {
//    return view("welcome");
//});

Route::get('/', [\App\Http\Controllers\PageController::class, "index"])->name("index");
Route::get('/news', [\App\Http\Controllers\PageController::class, "news"])->name("news");
Route::get('/news/{title}', [\App\Http\Controllers\PageController::class, "showNews"])->name("show-news");
Route::post('/form-contacts', [\App\Http\Controllers\PageController::class, "formContacts"])->name("form-contacts");

Auth::routes();

Route::prefix('amg-admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminController::class)->name("admin.index");
    Route::post("gallery/{article}/img/delete", [\App\Http\Controllers\Admin\AdminImagesController::class, "deleteImageArticle"]);
    Route::resource("article", \App\Http\Controllers\Admin\AdminArticlesController::class);

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

