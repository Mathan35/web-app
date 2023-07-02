<?php

namespace App\Http\Livewire;

use App\Models\ApplyJob;
use App\Models\Job;
use App\Models\Payment;
use App\Models\User;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $pay = array();
    public $todayAdminJobApplyCount = array();
    public $todayEmployeeJobApplyCount = array();

    public function render()
    {
        $jobs = Job::query();
        $users = User::query();
        $applies = ApplyJob::query();
        $payment = Payment::query();
        $cost = Payment::whereHas('job', function ($query) {
            $query->where('hot_job', 1);
        })->count() * (config('app.payment.job') + config('app.payment.extra'));

        $todayCost = Payment::whereCreatedAt(today())->whereHas('job', function ($query) {
            $query->where('hot_job', 1);
        })->count() * (config('app.payment.job') + config('app.payment.extra'));

        $data = [
                'total_employees' => User::whereRole(1)->count(),
                'total_students' => User::whereRole(0)->count(),
                'admin_jobs' => Job::whereCreatedBy('admin')->count(),
                'employee_jobs' => Job::whereCreatedBy('employee')->count(),
                'total_applies' => ApplyJob::count(),
                'payments' => Payment::count(),
                'pay' => $cost,
                'today_pay' => $todayCost,

                'today_admin_jobs' => Job::whereCreatedBy('admin')->whereDate('created_at', today())->count(),
                'today_employee_jobs' => Job::whereCreatedBy('employee')->whereDate('created_at', today())->count(),
                'today_admin_applies' => Job::whereCreatedBy('admin')->whereDate('created_at', today())->sum('total_views'),
                'today_employee_applies' => Job::whereCreatedBy('employee')->whereDate('created_at', today())->sum('total_views'),
                'today_admin_views' => Job::whereCreatedBy('admin')->sum('total_views'),
                'today_employee_views' => Job::whereCreatedBy('employee')->sum('total_views'),
            ];

        return view('livewire.admin-dashboard', compact('data'));
    }
}
