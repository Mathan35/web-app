<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Component;

class HomeJobComponent extends Component
{
    use WithPagination;

    public $category = 'all'; // Initialize with 'all' as the default value
    public $type = 'all'; // Initialize with 'all' as the default value
    public $loading = false;

    public function render()
    {
        $this->loading = true;

        $categories = Job::distinct()->pluck('category')->map(function ($category) {
            return ucfirst(Str::slug($category, ' '));
        });

        $jobs = Job::query();

        if ($this->category !== 'all') {
            $jobs->where('category', Str::slug($this->category));
        }

        if ($this->type !== 'all') {
            $jobs->where('job_type', Str::slug($this->type));
        }

        // Simulate a 10-second delay using the wire:loading.delay modifier
        $jobs = $jobs->whereStatus('approved')->orderBy('created_at', 'desc')->paginate(5)->withQueryString()->onEachSide(2);

        $this->loading = false;

        return view('livewire.home-job-component', compact('jobs', 'categories'));
    }
}
