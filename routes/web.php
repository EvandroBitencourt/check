<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Subscription\SubscriptionController;
use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

Route::get('resume', [SubscriptionController::class, 'resume'])->name('subscriptions.resume');
Route::get('cancel', [SubscriptionController::class, 'cancel'])->name('subscriptions.cancel');
Route::get('invoice/{invoice}', [SubscriptionController::class, 'downloadInvoice'])->name('subscriptions.invoice.download');
Route::get('account', [SubscriptionController::class, 'account'])->name('subscriptions.account');
Route::post('subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('checkout', [SubscriptionController::class, 'index'])->name('subscriptions.checkout');

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/assinar/{plano}', [SiteController::class, 'plano'])->name('plano.home');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['subscribed'])->name('dashboard');
Route::get('/planos', [SiteController::class, 'planos'])->middleware(['auth'])->name('planos');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->middleware(['subscribed'])->name('cadastrar');
Route::post('/cadastroCarro',[CarrosController::class, 'cadastro'])->middleware(['subscribed'])->name('cadastroCarro');
Route::get('/vercarro',[CarrosController::class, 'verCarro'])->middleware(['subscribed'])->name('vercarro');

require __DIR__.'/auth.php';