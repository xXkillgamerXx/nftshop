<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Web3LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('dashboard');

//home
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Shops
Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shop', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shop/{shop}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/shop/{shop}/edit', [ShopController::class, 'edit'])->name('shop.edit');
Route::put('/shop/{shop}', [ShopController::class, 'update'])->name('shop.update');

//Items
Route::get('/item/create/{shop}', [ItemController::class, 'create'])->name('item.create');
Route::post('/item', [ItemController::class, 'store'])->name('item.store');
Route::get('/item/{item}', [ItemController::class, 'show'])->name('item.show');

//Web3 Login
Route::get('/web3-login-message', [Web3LoginController::class, 'message'])->name('web3.login.message');
Route::post('/web3-login-verify', [Web3LoginController::class, 'verify'])->name('web3.login.verify');

//Wallet
Route::get('/wallet', [WalletController::class, 'index'])->name('wallet.index')->middleware('auth');;;
Route::post('/wallet.verify', [Web3LoginController::class, 'add_wallet'])->name('wallet.verify')->middleware('auth');;;

Auth::routes();
