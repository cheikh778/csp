<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificationController;
//   use App\Http\Controllers\

Route::get('/', function () {
    return view('index');
})->name('index');


    //login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');

    //logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    //utilisateurs
    Route::get('/add-user', [UserController::class, 'showAddUserForm'])->name('ajouter un utilisateur');
    Route::post('/add-user', [UserController::class, 'addUser'])->name('user.add.post');
    Route::get('/users', [UserController::class, 'showUsers'])->name('les utilisateurs');
    Route::get('/user/block/{id}', [UserController::class, 'blockUser'])->name('user.block');
    Route::get('/user/unblock/{id}', [UserController::class, 'unblockUser'])->name('user.unblock');

    Route::get('verification/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');




    //admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/change-header-background', [AdminController::class, 'changeHeaderBackground'])->name('change.header.background');
    Route::post('/dashboard/add-partner', [AdminController::class, 'addPartner'])->name('add.partner');
    Route::post('/dashboard/add-gallery-photo', [AdminController::class, 'addGalleryPhoto'])->name('add.gallery.photo');
    Route::post('/dashboard/add-admin', [AdminController::class, 'addAdmin'])->name('add.admin');
    Route::post('/dashboard/update-info', [AdminController::class, 'updateInfo'])->name('update.info');

