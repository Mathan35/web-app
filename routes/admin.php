<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Jobs\JobIndexController;
use App\Http\Controllers\Admin\Jobs\JobStoreController;
use App\Http\Controllers\Admin\Jobs\JobCreateController;
use App\Http\Controllers\Admin\Jobs\JobUpdateController;
use App\Http\Controllers\Admin\Students\StudentIndexController;
use App\Http\Controllers\Admin\Employees\EmployeeShowController;
use App\Http\Controllers\Admin\Employees\EmployeeIndexController;
use App\Http\Controllers\Admin\Employees\EmployeeJobAppliesController;
use App\Http\Controllers\Admin\Jobs\JobEditController;
use App\Http\Controllers\Admin\Payments\PaymentIndexController;

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

Route::middleware(['auth', 'admin'])->group(function () {
   Route::get('admin/dashboard', DashboardController::class)->name('admin-dashboard');

   Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

      Route::get('dashboard', AdminDashboardController::class)->name('dashboard');
      
      // student
      Route::get('students', StudentIndexController::class)->name('students.index');

      // employee
      Route::get('employees', EmployeeIndexController::class)->name('employees.index');
      Route::get('employees/jobs/{id}', EmployeeShowController::class)->name('employees.show');
      Route::get('employees/job/student/{id}', EmployeeJobAppliesController::class)->name('employees.student');

      // jobs
      Route::get('jobs/create', JobCreateController::class)->name('jobs.create');
      Route::post('jobs/store', JobStoreController::class)->name('jobs.store');
      Route::get('jobs/index', JobIndexController::class)->name('jobs.index');
      Route::get('jobs/edit/{id}', JobEditController::class)->name('jobs.edit');
      Route::put('jobs/update/{id}', JobUpdateController::class)->name('jobs.update');

      //payments
      Route::get('payments/index', PaymentIndexController::class)->name('payments.index');
   });
});



require __DIR__.'/auth.php';
