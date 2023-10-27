<?php

namespace App\Listeners;

use App\Events\Utils;
use App\Models\Master\Utility;

class UtilListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Utils $event): void
    {
        $inc = Utility::select('start_value', 'last_value', 'max_value', 'increment_by')->where([
            ['coy_id', $event->coy_id],
            ['branch_code', $event->branch_code]
        ])->first();
        Utility::where([
            ['coy_id', $event->coy_id],
            ['branch_code', $event->branch_code]
        ])->update(['last_value' => $inc->last_value + $inc->increment_by]);    
    }
}
