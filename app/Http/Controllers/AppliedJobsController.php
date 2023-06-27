<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppliedJobsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $jobs = $user->jobs()->paginate(10);

        return view('applied-jobs', compact('jobs'));
        
    }
}
