<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\MainAccountController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\IstavrityController;
use App\Http\Controllers\Backend\PrintController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

//Admin Logout
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//Admin MainAccount
Route::get('/mainaccount', [MainAccountController::class, 'Index'])->name('mainaccount');
Route::get('/add/mainaccount', [MainAccountController::class, 'AddMainAccount'])->name('add.mainaccount');
Route::post('/store/mainaccount', [MainAccountController::class, 'StoreMainAccount'])->name('store.mainaccount');
Route::get('/add/editmainaccount/{family_code}', [MainAccountController::class, 'EditMainAccount'])->name('edit.mainaccount');
Route::post('/update/updatemainaccount/{family_code}', [MainAccountController::class, 'UpdateMainAccount'])->name('update.mainaccount');
Route::get('/delete/deletemainaccount/{family_code}', [MainAccountController::class, 'DeleteMainAccount'])->name('delete.mainaccount');


// Admin account All Route
Route::get('/account', [AccountController::class, 'Index'])->name('account');
Route::get('/add/account', [AccountController::class, 'AddAccount'])->name('add.account');
Route::post('/store/account', [AccountController::class, 'StoreAccount'])->name('store.account');
Route::get('/edit/account/{id}', [AccountController::class, 'EditAccount'])->name('edit.account');
Route::post('/update/updateaccount/{id}', [AccountController::class, 'UpdateAccount'])->name('update.account');
Route::get('/delete/deleteaccount/{id}', [AccountController::class, 'DeleteAccount'])->name('delete.account');

// Admin Istavrity All Route
Route::get('/istavrity', [IstavrityController::class, 'Index'])->name('istavrity');

Route::get('/prnpriview/{search}', [IstavrityController::class, 'PrntPriview'])->name('prnpriview');

