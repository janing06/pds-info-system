<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\PDS\FamilyBackgroundController;
use App\Http\Controllers\Web\PDS\PersonalInformartionController;
use App\Http\Controllers\Web\User\ActivateUser;
use App\Http\Controllers\Web\User\DeactivateUser;
use App\Http\Controllers\Web\User\UserController;
use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    $userTotal = User::count();
    return view('dashboard', compact('userTotal'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('users')->name('users.')->group(function () {
        Route::get('table', [UserController::class, 'table'])->name('table');
        Route::patch('activate/{user}', ActivateUser::class)->name('activate');
        Route::patch('deactivate/{user}', DeactivateUser::class)->name('deactivate');
    });
    Route::resource('users', UserController::class);

    Route::prefix('pds')->name('pds.')->group(function () {
        Route::patch('update/family/background/{familybg}', FamilyBackgroundController::class)->name('updateFamilyBackground');
        Route::get('table', [PersonalInformartionController::class, 'table'])->name('table');
    });
    Route::resource('pds', PersonalInformartionController::class);
});

require __DIR__ . '/auth.php';
