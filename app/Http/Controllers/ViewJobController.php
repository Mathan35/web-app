<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewJobController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $job = Job::find($id);

        if (Auth::check()) {
            $job->auth_user_views++;
        }

        $job->total_views++;
        $job->save();

        return view('view-job', compact('job'));
    }
}
