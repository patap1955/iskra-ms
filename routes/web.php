<?php

use Illuminate\Support\Facades\Route;

//Route::get("/", function () {
//    return view("welcome");
//});

Route::get('/', [\App\Http\Controllers\PageController::class, "index"])->name("index");
Route::get('/news', [\App\Http\Controllers\PageController::class, "news"])->name("news");
Route::get('/news/{article:slug}', [\App\Http\Controllers\PageController::class, "showNews"])->name("show-news");
Route::get('/questions', [\App\Http\Controllers\PageController::class, "questions"])->name("questions");
Route::post('/form-contacts', [\App\Http\Controllers\PageController::class, "formContacts"])->name("form-contacts");

Auth::routes();

Route::prefix('amg-admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminController::class)->name("admin.index");
    Route::post("gallery/{article}/img/delete", [\App\Http\Controllers\Admin\AdminImagesController::class, "deleteImageArticle"]);
    Route::resource("article", \App\Http\Controllers\Admin\AdminArticlesController::class);
    Route::resource("question", \App\Http\Controllers\Admin\AdminQuestionsController::class);
    Route::get("contacts", [\App\Http\Controllers\Admin\AdminContactsController::class, "index"])->name("admin.contacts");

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

