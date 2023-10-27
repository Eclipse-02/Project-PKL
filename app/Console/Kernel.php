<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        if (DB::table('utilities')->where('is_cycle', '=', 'D')) {
            $schedule
            ->call(function () {
                DB::table("utilities")
                    ->where([
                        ["coy_id", auth()->user()->coy_id],
                        ["empl_branch", auth()->user()->branch_code]
                    ])
                    ->update([
                        'last_value' => DB::raw("`start_value`")
                    ]);
            })
            ->daily();
        } else if (DB::table('utilities')->where('is_cycle', '=', 'M')) {
            $schedule
            ->call(function () {
                DB::table("utilities")
                    ->where([
                        ["coy_id", auth()->user()->coy_id],
                        ["empl_branch", auth()->user()->branch_code]
                    ])
                    ->update([
                        'last_value' => DB::raw("`start_value`")
                    ]);
            })
            ->monthly();
        } else {
            $schedule
            ->call(function () {
                DB::table("utilities")
                    ->where([
                        ["coy_id", auth()->user()->coy_id],
                        ["empl_branch", auth()->user()->branch_code]
                    ])
                    ->update([
                        'last_value' => DB::raw("`start_value`")
                    ]);
            })
            ->yearly();
        }

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
