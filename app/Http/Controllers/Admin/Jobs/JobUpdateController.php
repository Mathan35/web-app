<?php

namespace App\Http\Controllers\Admin\Jobs;

use App\Models\Job;
use App\Models\User;
use App\Models\RichContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $user = User::find(auth()->user()->id);

        $categorySlug = Str::slug($request->category);

        $job = Job::find($id);
        $job->job_title = $request->job_title;
        $job->user_id = Auth::check() ? auth()->user()->id : $user->id;
        $job->hot_job = $request->hot_job ? 1 : 0;
        $job->company_name = $request->company_name;
        $job->description_url = $request->description_url;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->start_ex = $request->start_ex;
        $job->end_ex = $request->end_ex;
        $job->job_type = $request->job_type;
        $job->category = $categorySlug;
        $job->status_changed_at = now();
        if ($request->file('company_logo')) {

            $file = $request->file('company_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/company_logo'), $filename);
            $data['company_logo'] = $filename;
            $job->company_logo = $filename;
        }
        $job->save();

        if ($request->content != null) {
            if ($job->richContent) {
                $jobContent = RichContent::find($job->richContent->id);
                $jobContent->content = $request->content;
                $jobContent->save();
            } else {
                $jobContent = new RichContent();
                $jobContent->id = Str::uuid()->toString();
                $jobContent->job_id = $job->id;
                $jobContent->content = $request->content;
                $jobContent->save();
            }
        }

        return redirect()->back()->with('message', 'Job Successfully Updated');
    }
}
