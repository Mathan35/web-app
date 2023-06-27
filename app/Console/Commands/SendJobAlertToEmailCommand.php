<?php

namespace App\Console\Commands;

use App\Mail\JobAlertToSubscribedUserMail;
use App\Models\Email;
use App\Models\Job;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendJobAlertToEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-job-alert-to-email-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send job alerts to the email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jobs = Job::whereStatus('approved')->latest()->limit(5)->get();

        Email::query()->each(function ($email) use ($jobs) {
            Mail::to($email->email)
                ->send(new JobAlertToSubscribedUserMail($email, $jobs));

            // $this->info('Jobs sends to '.$user->name.' successfully');
        });

        $this->info('Job alerts completed for ' . now());
    }
}
