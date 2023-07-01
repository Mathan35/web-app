<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewJobController;
use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\AppliedJobsController;
use App\Http\Controllers\FreshersJobController;
use App\Http\Controllers\StoreResumeController;
use App\Http\Controllers\ExperienceJobController;
use App\Http\Controllers\PaymentCreateController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\Employee\EditJobController;
use App\Http\Controllers\PayPaymentPendingController;
use App\Http\Controllers\Employee\UpdateJobController;
use App\Http\Controllers\AutocompleteCategoryController;
use App\Http\Controllers\Employee\EmployeeRequestController;
use App\Http\Controllers\Employee\EmployeeJobHistoryController;
use App\Http\Controllers\Employee\StoreEmplayeeRequestController;
use App\Http\Controllers\Employee\EmployeeJobHistoryDetailsController;

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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/image', [ProfileController::class, 'storeImage'])->name('profile.image');

    // Route::post('/payment/create', PaymentCreateController::class)->name('payment-create');
    Route::get('/payment/callback', PaymentCallbackController::class,)->name('payment-callback');
    Route::post('/store/resume', StoreResumeController::class)->name('store-resume');
    Route::post('/apply/job/{id}', ApplyJobController::class)->name('apply-job');
    Route::get('applied/jobs', AppliedJobsController::class)->name('applied-jobs');
    Route::middleware(['emp.auth'])->group(function () {
        Route::get('/employee-dashboard', [ProfileController::class, 'employeeDashboard'])->name('employee-dashboard');
        Route::get('/job-history', EmployeeJobHistoryController::class)->name('job-history');
        Route::get('/job-history/details/{id}', EmployeeJobHistoryDetailsController::class)->name('job-history-details');
        Route::post('pay/payment-pending/{id}', PayPaymentPendingController::class)->name('pay-pending-payment');
        Route::get('/edit/job/{id}', EditJobController::class)->name('edit-job');
        Route::put('/update/job/{id}', UpdateJobController::class)->name('update-job');
    });
});

Route::get('/employee-request', EmployeeRequestController::class)->name('employee-request');
Route::post('/store-employee-request', StoreEmplayeeRequestController::class)->name('store-employee-request');

// job pages
Route::get('/job/{id}', ViewJobController::class,)->name('view-job');
Route::get('/freshers/jobs', FreshersJobController::class)->name('freshers');
Route::get('/experience/jobs', ExperienceJobController::class)->name('experience');

Route::get('/autocomplete/category', AutocompleteCategoryController::class)->name('autocomplete-category');

// Route::any('{any}', function () {
//     // return view('errors.404'); // Replace 'errors.404' with your error page view
//     abort(404);
// })->where('any', '.*');

Route::get('mail', function() {
    return view('mail.apply-mail-to-user');
});

require __DIR__.'/auth.php';
