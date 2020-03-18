<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\ShowTime;

class ShowTimeObserver
{
    protected $table = 'show_times';
    /**
     * Handle the show time "created" event.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return void
     */
    public function created(ShowTime $showTime)
    {
        Log::createInsertLog($this->table, $showTime->id);
    }

    /**
     * Handle the show time "updated" event.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return void
     */
    public function updated(ShowTime $showTime)
    {
        Log::createUpdateLog($this->table, $showTime->id);
    }

    /**
     * Handle the show time "deleted" event.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return void
     */
    public function deleted(ShowTime $showTime)
    {
        Log::createDeleteLog($this->table, $showTime->id);
    }

    /**
     * Handle the show time "restored" event.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return void
     */
    public function restored(ShowTime $showTime)
    {
        //
    }

    /**
     * Handle the show time "force deleted" event.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return void
     */
    public function forceDeleted(ShowTime $showTime)
    {
        //
    }
}
