<?php

namespace App\Console\Commands;

use App\Models\Job;
use App\Models\Payment;
use Illuminate\Console\Command;

class UpdatePaymentPendingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-payment-pending';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update payment pending';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jobs = Job::where('created_by', '!=', 'admin')->query()->get()->map(function($job) {
            $appliedJob = Payment::whereJobId($job->id)->where('status', 'paid')->first();
            if($job->status === 'pending' && !$appliedJob){
                $job->status = 'payment';
                $job->save();
            }
            elseif($job->status === 'pending' || $job->status === 'payment' && $appliedJob) {
                $job->status = 'approved';
                $job->save();
            }
        });
        
    }
}
