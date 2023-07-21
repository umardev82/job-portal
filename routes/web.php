<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserAuthController;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->prefix('/admin')->group(function(){

//Dashboard
Route::get('dashboard',[DashboardController::class,'index'])->name('admin.include.dashboard');
//Post
Route::get('posts',[PostController::class,'index'])->name('admin.post.index');
Route::get('post/create',[PostController::class,'create'])->name('admin.post.create');
Route::get('post/show/{id}',[PostController::class,'show'])->name('admin.post.show');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('admin.post.edit');
Route::put('post/update/{id}',[PostController::class,'update'])->name('admin.post.update');
Route::post('post/store',[PostController::class,'store'])->name('admin.post.store');
Route::delete('post/delete/{id}',[PostController::class,'destroy'])->name('admin.post.destroy');
//Role
Route::get('roles',[RoleController::class,'index'])->name('admin.role.index');
Route::get('role/create',[RoleController::class,'create'])->name('admin.role.create');
Route::post('role/store',[RoleController::class,'store'])->name('admin.role.store');
Route::get('role/edit{id}',[RoleController::class,'edit'])->name('admin.role.edit');
Route::put('role/update/{id}',[RoleController::class,'update'])->name('admin.role.update');
Route::delete('role/delete/{id}',[RoleController::class,'destroy'])->name('admin.role.destroy');
//company
Route::get('company',[CompanyController::class,'index'])->name('admin.company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('admin.company.create');
Route::post('company.store',[CompanyController::class,'store'])->name('admin.company.store');
Route::get('company/edit{id}',[CompanyController::class,'edit'])->name('admin.company.edit');
Route::put('company/update/{id}',[CompanyController::class,'update'])->name('admin.company.update');
Route::delete('company/delete/{id}',[CompanyController::class,'destroy'])->name('admin.company.destroy');


//Route::get('role/edit',[RoleController::class,'edit'])->name('admin.role.edit');


});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
