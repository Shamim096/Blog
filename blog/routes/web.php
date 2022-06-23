<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('show-blogs');
Route::get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//    blog category
    Route::get('/add-category', [BlogCategoryController::class, 'addCategory'])->name('add-category');
    Route::get('/manage-category', [BlogCategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [BlogCategoryController::class, 'editCategory'])->name('edit-category');
    Route::get('/delete-category/{id}', [BlogCategoryController::class, 'deleteCategory'])->name('delete-category');
    Route::post('/new-blog-category', [BlogCategoryController::class, 'newCategory'])->name('new-blog-category');
    Route::post('/update-blog-category/{id}', [BlogCategoryController::class, 'updateCategory'])->name('update-blog-category');
//    blog
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');
    Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('update-blog');

    //    service category
    Route::get('/add-service-category', [ServiceCategoryController::class, 'addCategory'])->name('add-service-category');
    Route::get('/manage-service-category', [ServiceCategoryController::class, 'manageCategory'])->name('manage-service-category');
    Route::get('/edit-service-category/{id}', [ServiceCategoryController::class, 'editCategory'])->name('edit-service-category');
    Route::get('/delete-service-category/{id}', [ServiceCategoryController::class, 'deleteCategory'])->name('delete-service-category');
    Route::post('/new-service-category', [ServiceCategoryController::class, 'newCategory'])->name('new-service-category');
    Route::post('/update-service-category/{id}', [ServiceCategoryController::class, 'updateCategory'])->name('update-service-category');
});
