<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;

class StoreResumeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ResumeRequest $request)
    {
        if ($request->file('resume')) {
            $file = $request->file('resume');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('public/resume'), $filename);
            $data['resume'] = $filename;

            $checkResume = Resume::find(auth()->user()->id);

            if($checkResume != null){
                $checkResume->user_id = auth()->user()->id;
                $checkResume->resume = $filename;
                $checkResume->save();
            }else{
                $storeResume = new Resume();
                $storeResume->user_id = auth()->user()->id;
                $storeResume->resume = $filename;
                $storeResume->save();
            }

            return redirect()->back()->with('message', 'Resume saved successfully');
        }
    }
}