<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DialogFileView extends Component
{
    public $resume;

    public function __construct($resume)
    {
        $this->resume = $resume;
    }
    public function render()
    {
        return view('livewire.dialog-file-view');
    }
}
