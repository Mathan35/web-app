<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $jobs = Job::whereUserId($id)->paginate();
        
        return view('admin.employee.view-employee', compact('jobs'));
    }
}
