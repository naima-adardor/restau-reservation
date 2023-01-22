<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendCategoryController;
use App\Http\Controllers\Frontend\FrontendMenuController;
use App\Http\Controllers\Frontend\FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;


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

Route::get('/',[WelcomeController::class,'index']);


Route::get('/categories',[FrontendCategoryController::class,'index'])->name('categories.index');
Route::get('/menus',[FrontendMenuController::class,'index'])->name('menus.index');
Route::get('/reservation/step-one',[FrontendReservationController::class,'stepOne'])->name('reservations.step.one');
Route::get('/reservation/step-two',[FrontendReservationController::class,'stepTwo'])->name('reservations.step.two');
Route::get('/categories/{category}',[FrontendCategoryController::class,'show'])->name('categories.show');
Route::post('/reservation/step-one',[FrontendReservationController::class,'StorestepOne'])->name('reservations.store.step.one');
Route::post('/reservation/step-two',[FrontendReservationController::class,'StorestepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou',[WelcomeController::class,'thankyou'])->name('thankyou');
Route::get('/about',[WelcomeController::class,'about'])->name('about');
Route::post('/addcart/{id}',[FrontendMenuController::class,'addcart']);
Route::get('/showcart/{id}',[FrontendMenuController::class,'showcart']);
Route::get('/remove/{id}',[FrontendMenuController::class,'remove']);
Route::post('/orderconfirm',[FrontendMenuController::class,'orderconfirm']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function () {
     Route::get('/', [AdminController::class, 'index'])->name('index');
     Route::resource('/categories',CategoryController::class);
     Route::resource('/menus',MenuController::class);
     Route::resource('/tables',TableController::class);
     Route::resource('/reservations',ReservationController::class);
});

require __DIR__.'/auth.php';
