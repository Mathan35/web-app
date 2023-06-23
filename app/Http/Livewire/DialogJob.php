<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Component;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DialogJob extends Component
{
    public $filename;

    public function download()
    {
        $filePath = public_path('/public/resume/civil_engineer_resume_template.pdf');

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        abort(404);
    }

    public function render()
    {
        return view('livewire.dialog-job');
    }


    public function viewFile()
    {
        $filePath = public_path('/public/resume/civil_engineer_resume_template.pdf');

        if (file_exists($filePath)) {
            $file = new File($filePath);
            $fileContent = $file->get();
            return view('livewire.dialog-job', ['fileContent' => $fileContent]);
        }

        abort(404);
    }
    
}
