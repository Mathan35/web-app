<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeJobAppliesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $job = Job::find($id);
        $users = $job->users()->paginate(10);

        return view('admin.employee.view-applies', compact('users'));
    }
}
