<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class IndexJobs extends Component
{
    public $type = 'all';

    public function render()
    {
        if($this->type === 'all'){
            $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
        }
        else{
            $jobs = Job::orderBy('created_at', 'desc')->whereStatus($this->type)->paginate(10);
        }

        return view('livewire.index-jobs', compact('jobs'));
    }

    public function changeStatus($jobId)
    {
        $job = Job::find($jobId);
        $job->status =  $job->status === 'pending' ? 'approved' : 'pending';
        $job->save();
        session()->flash('message', 'Status successfully changed.');
    }
}
