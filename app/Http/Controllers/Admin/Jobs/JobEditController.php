<?php

namespace App\Http\Controllers\Admin\Jobs;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $job = Job::find($id);

        return view('admin.jobs.edit-job', compact('job'));
    }
}
