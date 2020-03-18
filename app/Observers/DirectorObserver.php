<?php

namespace App\Observers;

use App\Models\Director;
use App\Models\Log;

class DirectorObserver
{
    private $table = 'directors';
    /**
     * Handle the director "created" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function created(Director $director)
    {
        Log::createInsertLog($this->table, $director->id);
    }

    /**
     * Handle the director "updated" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function updated(Director $director)
    {
        Log::createUpdateLog($this->table, $director->id);
    }

    /**
     * Handle the director "deleted" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function deleted(Director $director)
    {
        Log::createDeleteLog($this->table, $director->id);
    }

    /**
     * Handle the director "restored" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function restored(Director $director)
    {
        //
    }

    /**
     * Handle the director "force deleted" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function forceDeleted(Director $director)
    {
        //
    }
}
