<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\Reservation;

class ReservationObserver
{
    protected $table = 'reservations';
    /**
     * Handle the reservation "created" event.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return void
     */
    public function created(Reservation $reservation)
    {
        Log::createInsertLog($this->table, $reservation->id);
    }

    /**
     * Handle the reservation "updated" event.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return void
     */
    public function updated(Reservation $reservation)
    {
        Log::createUpdateLog($this->table, $reservation->id);
    }

    /**
     * Handle the reservation "deleted" event.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return void
     */
    public function deleted(Reservation $reservation)
    {
        Log::createDeleteLog($this->table, $reservation->id);
    }

    /**
     * Handle the reservation "restored" event.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return void
     */
    public function restored(Reservation $reservation)
    {
        //
    }

    /**
     * Handle the reservation "force deleted" event.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return void
     */
    public function forceDeleted(Reservation $reservation)
    {
        //
    }
}
