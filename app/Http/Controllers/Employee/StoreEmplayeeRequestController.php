<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobRequest;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Razorpay\Api\Api;

class StoreEmplayeeRequestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreJobRequest $request)
    {
        $user = null;
        if(!Auth::check()){
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 1,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
        }
        $job = new Job();
        $job->job_title = $request->job_title;
        $job->user_id = Auth::check()? auth()->user()->id:$user->id;
        $job->job_id = $this->getJobId();
        $job->hot_job = $request->hot_job? 1:0;
        $job->company_name = $request->company_name;
        $job->content = $request->content;
        $job->description_url = $request->description_url;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->start_ex = $request->start_ex;
        $job->end_ex = $request->end_ex;
        $job->job_type = $request->job_type;
        if ($request->file('company_logo')) {
            $file = $request->file('company_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/company_logo'), $filename);
            $data['company_logo'] = $filename;
            $job->company_logo = $filename;
        }
        $job->save();

        // payment process
        $api = new Api(config('app.payment.key'), config('app.payment.secret'));

        $orderId = rand(1111111, 432423424);
        $amount = $request->hot_job ? 6000 : 5000;
        $payment = $api->paymentLink->create(array(
            'amount' => $amount,
            'currency' => 'INR',
            'accept_partial' => false,
            'description' => 'For job posts',
            'customer' => [
                'name' => 'Gaurav Kumar',
                'email' => 'gaurav.kumar@example.com',
                'contact' => '+919000090000'
            ],
            'notify' => [
                'sms' => true,
                'email' => true
            ],
            'reminder_enable' => true,
            'notes' => [
                'order_id' => $orderId
            ],
            'callback_url' => 'http://127.0.0.1:8000/payment/callback',
            'callback_method' => 'get'
        ));

        return redirect($payment->short_url);
        
    }

    public function getJobId()
    {
        $jobID = 'JOB' . rand(12323, 999999);
        $checkId = Job::where('job_id', $jobID)->first();
        if($checkId != null){
            $this->getJobId();
        }

        return $jobID;
    }
}
