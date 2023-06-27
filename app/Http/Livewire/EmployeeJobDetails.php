<?php

namespace App\Http\Livewire;

use App\Models\ApplyJob;
use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class EmployeeJobDetails extends Component
{
    public $jobId;
    public $search;
    public $searchStatus;

    public function __construct($jobId)
    {
        $this->jobId = $jobId;
    }

    public function render()
    {
        $job = Job::find($this->jobId);
            $users = $job->users()->paginate(10);
  
        return view('livewire.employee-job-details', compact('job', 'users'));
    }

    public function updateStatus($status, $userId)
    {
        $job = ApplyJob::where('user_id', $userId)
            ->where('job_id', $this->jobId)
            ->first();

        if ($job->status === 'selected') {
            // session()->flash("warning", "You can't change after the selection");
            return Redirect::back()->with("warning", "You can't change after the selection");

        } else {
            $job->status = $status;
            $job->save();
            // session()->flash('message', 'Status successfully updated.');
            return Redirect::back()->with('message', 'Status successfully updated.');

        }
        return redirect()->back();

    }

}
