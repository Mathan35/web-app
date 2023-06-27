<?php

namespace App\Console\Commands;

use App\Mail\JobAlertToUserMail;
use App\Models\Job;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendJobAlertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-job-alert-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send job alert to the users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jobs = Job::whereStatus('approved')->latest()->limit(5)->get();

        User::query()->each(function($user) use ($jobs) {
            Mail::to($user->email)
                ->send(new JobAlertToUserMail($user, $jobs));

            // $this->info('Jobs sends to '.$user->name.' successfully');
        });
        
        $this->info('Job alerts completed for '.now());
    }
}
