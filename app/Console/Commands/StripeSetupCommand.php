<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StripeSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:stripe-setup-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $stripe = new \Stripe\StripeClient('sk_test_51NL0NpSFwWoVlArQWF361BnkTMdxiyyN1feqlht9jPEb1ZSAZJJMuVvpp5Hvgg86xN1JMjotCMs7aHxtayjacpQv00YGz4JssL');
        $product = $stripe->products->create([
            'name' => 'SoftwareJobs',
        ]);
        $stripe->prices->create([
            'unit_amount' => 100,
            'currency' => 'inr',
            'product' =>  $product->id,
        ]);
    }
}
