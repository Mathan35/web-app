<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PayPaymentPendingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $job = Job::find($id);

        $api = new Api(config('app.payment.key'), config('app.payment.secret'));

        $orderId = rand(1111111, 432423424);
        $amount = $job->hot_job ? 6000 : 5000;
        $payment = $api->paymentLink->create(array(
            'amount' => $amount,
            'currency' => 'INR',
            'accept_partial' => false,
            'description' => 'For job posts',
            'customer' => [
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'contact' => auth()->user()->phone
            ],
            'notify' => [
                'sms' => true,
                'email' => true
            ],
            'reminder_enable' => true,
            'notes' => [
                'order_id' => $orderId,
                'job_id' => $job->id
            ],
            'callback_url' => 'http://127.0.0.1:8000/payment/callback',
            'callback_method' => 'get'
        ));

        return redirect($payment->short_url);
    }
}
