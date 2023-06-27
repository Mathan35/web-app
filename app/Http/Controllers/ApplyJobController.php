<?php

namespace App\Http\Controllers;

use App\Mail\ApplyMailToEmployee;
use App\Mail\ApplyMailToUser;
use App\Models\Job;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
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
                Resume::create([
                    'user_id' => $user->id,
                    'resume' => $filename,
                    'extension' => $extension,
                ]);
            }
        }

        $job = Job::findOrFail($jobId);

        $employee = User::findOrFail($job->user_id);

        $user->jobs()->attach($job, [
            'applied_at' => now(),
            'status' => 'pending',
        ]);

        Mail::to($user->email)
            ->send(new ApplyMailToUser($job));

        Mail::to($employee->email)
            ->send(new ApplyMailToEmployee($user, $job));

        return redirect()->back()->with('success', 'Job applied successfully');
    }
}
