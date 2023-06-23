<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewJobController;
use App\Http\Controllers\FreshersJobController;
use App\Http\Controllers\ExperienceJobController;
use App\Http\Controllers\PaymentCreateController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\Employee\EmployeeRequestController;
use App\Http\Controllers\Employee\EmployeeJobHistoryController;
use App\Http\Controllers\Employee\EmployeeJobHistoryDetailsController;
use App\Http\Controllers\Employee\StoreEmplayeeRequestController;
use App\Http\Controllers\StoreResumeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::post('/payment/create', PaymentCreateController::class)->name('payment-create');
    Route::get('/payment/callback', PaymentCallbackController::class,)->name('payment-callback');

    Route::get('/job/2342424', ViewJobController::class,)->name('view-job');

    Route::post('/store/resume', StoreResumeController::class)->name('store-resume');

    Route::middleware(['emp.auth'])->group(function () {
        Route::get('/employee-dashboard', [ProfileController::class, 'employeeDashboard'])->name('employee-dashboard');
        Route::get('/job-history', EmployeeJobHistoryController::class)->name('job-history');
        Route::get('/job-history/details', EmployeeJobHistoryDetailsController::class)->name('job-history-details');
    });
});

Route::get('/employee-request', EmployeeRequestController::class)->name('employee-request');
Route::post('/store-employee-request', StoreEmplayeeRequestController::class)->name('store-employee-request');

// job pages
Route::get('/freshers/jobs', FreshersJobController::class)->name('freshers');
Route::get('/experience/jobs', ExperienceJobController::class)->name('experience');





require __DIR__.'/auth.php';
