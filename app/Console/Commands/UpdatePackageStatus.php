<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\package;
use Carbon;
class UpdatePackageStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'packages:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the status of packages based on their end date';

    /**
     * Execute the console command.
     *
     * @return int
     */
//     public function handle()
//     {
//         return Command::SUCCESS;
//     }

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();

        $packages = Package::where('end_date', '<', $now)
            ->where('active', 1)
            ->get();

        foreach ($packages as $package) {
            $package->update(['active' => 0]);
            $this->info('Package ID ' . $package->id . ' status updated to inactive.');
        }

        return 0;
    }
}
