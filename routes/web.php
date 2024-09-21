<?php

use App\Livewire\AdminDashboard;
use App\Livewire\PenulisDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');


// Route untuk admin dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/roles', App\Livewire\RoleManager::class)->name('roles');
    Route::get('/admin/permissions', App\Livewire\PermissionManager::class)->name('permissions');

});

// Route untuk penulis dashboard
Route::middleware(['auth', 'role:penulis'])->group(function () {
    Route::get('/penulis/dashboard', PenulisDashboard::class)->name('penulis.dashboard');
    Route::resource('/penulis/posts', PostController::class);
});

Route::post('/logout', \App\Http\Controllers\LogoutController::class)->name('logout');
