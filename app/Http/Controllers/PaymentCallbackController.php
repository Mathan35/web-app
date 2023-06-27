<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Payment;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\InputBag;
use Razorpay\Api\Api;

class PaymentCallbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $checkPayment = Payment::where('razorpay_payment_id', $request->razorpay_payment_id)->first();
  
        if($checkPayment != null){
            return redirect('/');
        }

        $api = new Api(config('app.payment.key'), config('app.payment.secret'));

        try {
            $checkRazerPayment = $api->payment->fetch($request->razorpay_payment_id);
        } catch (\Throwable $th) {
            return redirect('/');
        }

        $payment = new Payment();
        $payment->payment_id = 'PAYMENT'.rand(111111, 9999999);
        $payment->razorpay_payment_id = $request['razorpay_payment_id'];
        $payment->job_id = $checkRazerPayment['notes']['job_id'];
        $payment->razorpay_payment_link_id = $request['razorpay_payment_link_id'];
        $payment->status = $request['razorpay_payment_link_status'];
        $payment->save();

        return view('payments.result');
    }
}
