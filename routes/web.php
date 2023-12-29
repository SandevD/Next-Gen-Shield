<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Dashboard\BasicController;
use App\Http\Controllers\Dashboard\ChangePasswordController;
use App\Http\Controllers\Dashboard\ImageController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SocialController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::get('/whatweoffer', [OfferController::class, 'index'])->name('whatweoffer.index');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus.index');
Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
Route::post('/send-email', [ContactUsController::class, 'sendEmail'])->name('send.email');


Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/dashboard',[IndexController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard-basic',[BasicController::class, 'index'])->name('dashboard.basic');
    Route::post('/dashboard-update',[BasicController::class, 'update'])->name('dashboard.update');
    Route::get('/dashboard-image',[ImageController::class, 'index'])->name('dashboard.image');
    Route::post('/dashboard-image-store-one',[ImageController::class, 'storeOne'])->name('dashboard.storeone');
    Route::get('/dashboard-service-view',[ServiceController::class, 'view'])->name('dashboard.service.view');
    Route::get('/dashboard-service',[ServiceController::class, 'index'])->name('dashboard.service');
    Route::post('/dashboard-service-add',[ServiceController::class, 'add'])->name('dashboard.service.add');
    Route::get('/dashboard-service-edit-{edit}',[ServiceController::class, 'edit'])->name('dashboard.service.edit');
    Route::post('/dashboard-service-update',[ServiceController::class, 'update'])->name('dashboard.service.update');
    Route::get('/dashboard-service-delete-{delete}',[ServiceController::class, 'delete'])->name('dashboard.service.delete');
    Route::get('/dashboard-social',[SocialController::class, 'index'])->name('dashboard.social');
    Route::post('/dashboard-social-update',[SocialController::class, 'update'])->name('dashboard.social.update');
    Route::get('/change-password',[ChangePasswordController::class, 'index'])->name('dashboard.password');
    Route::post('/change-password',[ChangePasswordController::class, 'store'])->name('change.password');

});

