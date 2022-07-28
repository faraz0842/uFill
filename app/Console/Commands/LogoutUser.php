<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Console\Command;

class LogoutUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logout:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command run successfully';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Log::info("Cron is working fine!");

        $admin_users = Log::whereNotNull('admin_id')->where('created_at' ,'<=' , Carbon::now()->subHours(2)->toDateTimeString())->groupBy('admin_id')->pluck('admin_id');

        $update_status = Admin::whereIn('admin_id',$admin_users)->update([
            'status' => 'offline',
        ]);

        // Log::info('Status Changed To Offline');

        return 0;
    }
}
