<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Resume;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ApplyMailToUser;
use App\Mail\ApplyMailToEmployee;
use App\Models\ApplyJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ApplyJobController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $jobId)
    {

        $this->validate($request, [
            'resume' => 'sometimes|mimes:pdf,doc,docx',
        ]);

        $user = Auth::user();

        if (!$user->resume && !$request->hasFile('resume')) {
            return redirect()->back()->with('message', 'Please upload the resume and continue applying for jobs.');
        }

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file->move(public_path('public/resume'), $filename);
            $data['resume'] = $filename;


            $resume = Resume::whereUserId(auth()->user()->id)->first();
            if ($resume) {
                $resume->resume = $filename;
                $resume->extension = $extension;
                $resume->save();
            } else {
                $resume = new Resume();
                $resume->id = Str::uuid()->toString();
                $resume->user_id = $user->id;
                $resume->resume = $filename;
                $resume->extension = $extension;
                $resume->save();
            }
        }

        $job = Job::findOrFail($jobId);

        $employee = User::findOrFail($job->user_id);

        $applyJob = new ApplyJob();
        $applyJob->id = Str::uuid()->toString();
        $applyJob->user_id = $user->id;
        $applyJob->job_id = $job->id;
        $applyJob->applied_at = now();
        $applyJob->status = 'pending';
        $applyJob->save();

        Mail::to($user->email)
            ->send(new ApplyMailToUser($job));

        Mail::to($employee->email)
            ->send(new ApplyMailToEmployee($user, $job));

        return redirect()->back()->with('success', 'Job applied successfully');
    }
}
