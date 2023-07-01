<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeIndexComponent extends Component
{
    use WithPagination;

    public $status;

    public function render()
    {
        $employees = User::whereRole(1)->paginate(10);

        return view('livewire.employee-index-component', compact('employees'));
    }

    public function changeStatus($employeeId)
    {
        $employee = User::find($employeeId);
        $employee->status =  $employee->status === 1 ? 0 : 1;
        $employee->save();
        session()->flash('message', 'Status successfully changed.');
    }
}
