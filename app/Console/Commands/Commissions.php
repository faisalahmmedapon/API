<?php

namespace App\Console\Commands;

use App\Models\Commission;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Console\Command;

class Commissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'commissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'commissions';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $subscribedUsers = Subscription::with('plan')->get();

        foreach ($subscribedUsers as $user) {

            $commission = new Commission([
                'user_id' => $user->user_id,
                'amount' => $user->plan->commission,
                'description' => 'This is your today commission Amount',
            ]);

            $commission->save();

            if ($commission){
                $get_commission_user = User::findOrFail($user->user_id);
                $get_commission_user->balance = $get_commission_user->balance + $user->plan->commission;
                $get_commission_user->save();
            }
        }

        $this->info('Commissions processed successfully.');
    }
}
