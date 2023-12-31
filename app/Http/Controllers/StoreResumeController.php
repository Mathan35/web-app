<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Support\Str;
use App\Http\Requests\ResumeRequest;

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
            $extension = $file->getClientOriginalExtension();

            $checkResume = Resume::whereUserId(auth()->user()->id)->first();

            if($checkResume != null){
                $checkResume->user_id = auth()->user()->id;
                $checkResume->resume = $filename;
                $checkResume->extension = $extension;
                $checkResume->save();
            }else{
                $storeResume = new Resume();
                $storeResume->id = Str::uuid()->toString();
                $storeResume->user_id = auth()->user()->id;
                $storeResume->resume = $filename;
                $storeResume->extension = $extension;
                $storeResume->save();
            }

            return redirect()->back()->with('message', 'Resume saved successfully');
        }
    }
}
