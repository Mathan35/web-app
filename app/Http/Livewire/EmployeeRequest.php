<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EmployeeRequest extends Component
{
    use WithFileUploads;

    public $logo;

    public function render()
    {
        return view('livewire.employee-request');
    }

}
