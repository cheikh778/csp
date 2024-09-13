<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\GaleryController;
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


    //galerie
    Route::get('/add-gallery-photo', [GaleryController::class, 'create'])->name('ajouter une photo');
    Route::post('/add-gallery-photo', [GaleryController::class, 'store'])->name('gallery.add.post');
    Route::get('/galleries', [GaleryController::class, 'index'])->name('galeries');
    Route::get('/gallery/{id}', [GaleryController::class, 'show'])->name('gallery.show');
    Route::get('/gallery/edit/{id}', [GaleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/edit/{id}', [GaleryController::class, 'update'])->name('gallery.update');
    Route::get('/gallery/delete/{id}', [GaleryController::class, 'destroy'])->name('gallery.delete');
    Route::post('/gallery/delete-multiple', [GaleryController::class, 'deleteMultiple'])->name('gallery.delete.multiple');
