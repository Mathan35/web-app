<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndexComponent extends Component
{
    use WithPagination;

    public $status;
    
    public function render()
    {
        $students = User::whereRole(0)->paginate(10);

        return view('livewire.student-index-component', compact('students'));
    }

    public function changeStatus($studentId)
    {
        $student = User::find($studentId);
        $student->status =  $student->status === 1? 0 : 1;
        $student->save();

        session()->flash('message', 'Status successfully changed.');
    }
}
