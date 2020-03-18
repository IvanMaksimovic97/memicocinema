<?php

namespace App\Observers;

use App\Models\Actor;
use App\Models\Log;

class ActorObserver
{
    private $table = 'actors';
    /**
     * Handle the actor "created" event.
     *
     * @param  \App\Models\Actor  $actor
     * @return void
     */
    public function created(Actor $actor)
    {
        Log::createInsertLog($this->table, $actor->id);
    }

    /**
     * Handle the actor "updated" event.
     *
     * @param  \App\Models\Actor  $actor
     * @return void
     */
    public function updated(Actor $actor)
    {
        Log::createUpdateLog($this->table, $actor->id);
    }

    /**
     * Handle the actor "deleted" event.
     *
     * @param  \App\Models\Actor  $actor
     * @return void
     */
    public function deleted(Actor $actor)
    {
        Log::createDeleteLog($this->table, $actor->id);
    }

    /**
     * Handle the actor "restored" event.
     *
     * @param  \App\Models\Actor  $actor
     * @return void
     */
    public function restored(Actor $actor)
    {
        //
    }

    /**
     * Handle the actor "force deleted" event.
     *
     * @param  \App\Models\Actor  $actor
     * @return void
     */
    public function forceDeleted(Actor $actor)
    {
        //
    }
}
