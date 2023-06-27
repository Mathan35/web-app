<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployeeJobHistory extends Component
{

    public $type = 'all';

    public function render()
    {
        if($this->type === 'all'){
            $jobs = Job::whereUserId(Auth::user()->id)->paginate(10);
        }else
        {
            $jobs = Job::whereUserId(Auth::user()->id)->whereStatus($this->type)->paginate(10);
        }
        $jobApplies = 0;
        $job = Job::query()->whereUserId(Auth::user()->id)->get()->map(function ($job) use (&$jobApplies) {
            if ($job->userCount()) {
                $jobApplies++;
            }
        });
        $jobStatics = [
            'total_posts' => $jobs->count(),
            'total_views' => $jobs->sum('total_views'),
            'total_applies' => $jobApplies
        ];

        return view('livewire.employee-job-history', compact('jobs', 'jobStatics'));
    }
}
