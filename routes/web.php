<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Subscription\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('subscriptions/resume', [SubscriptionController::class, 'resume'])->name('subscriptions.resume');
Route::get('subscriptions/cancel', [SubscriptionController::class, 'cancel'])->name('subscriptions.cancel');
Route::get('subscriptions/invoice/{invoice}', [SubscriptionController::class, 'downloadInvoice'])->name('subscriptions.invoice.download');
Route::get('subscriptions/account', [SubscriptionController::class, 'account'])->name('subscriptions.account');
Route::post('subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('subscriptions/checkout', [SubscriptionController::class, 'index'])->name('subscriptions.checkout');

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/assinar/{plano}', [SiteController::class, 'plano'])->name('plano.home');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['subscribed'])->name('dashboard');
Route::get('/planos', [SiteController::class, 'planos'])->middleware(['auth'])->name('planos');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->middleware(['subscribed'])->name('cadastrar');

require __DIR__.'/auth.php';