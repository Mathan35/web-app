<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\RichContent;
use Livewire\Component;

class ViewJob extends Component
{

    public $jobId;

    public function __construct($jobId)
    {
        $this->jobId = $jobId;
    }

    public function render()
    {
        $job = Job::find($this->jobId);

        $content = RichContent::whereJobId($this->jobId)->first();

        return view('livewire.view-job', compact('job', 'content'));
    }
}
