<?php

namespace App\Http\Livewire;

use App\Models\Email;
use Livewire\Component;
use Illuminate\Support\Str;

class GetUserMail extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.get-user-mail');
    }

    public function updateEmail()
    {
        $validatedData = $this->validate(
            ['email' => 'required|email'],
            [
                'email.required' => 'The :attribute cannot be empty.',
                'email.email' => 'The :attribute format is not valid.',
            ],
            ['email' => 'Email Address']
        );

        $email = new Email();
        $email->id = Str::uuid()->toString();
        $email->email = $this->email;
        $email->save();

        session()->flash('message', 'Email successfully updated.');

        $this->email = '';

    }
}
