<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\User;

class UserObserver
{
    private $table = 'users';
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Model\User  $user
     * @return void
     */
    public function created(User $user)
    {
        Log::createInsertLog($this->table, $user->id);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\Model\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        Log::createUpdateLog($this->table, $user->id);
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\Model\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        Log::createDeleteLog($this->table, $user->id);
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\Model\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\Model\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
