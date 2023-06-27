<?php
namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class EmployeeJobHistoryDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $job = Job::find($id);

        return view('employee.employee-job-history-details', compact('job'));
    }
}
