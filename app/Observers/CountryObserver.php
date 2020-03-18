<?php

namespace App\Observers;

use App\Models\Country;
use App\Models\Log;

class CountryObserver
{
    private $table = 'countries';
    /**
     * Handle the country "created" event.
     *
     * @param  \App\Models\Country  $country
     * @return void
     */
    public function created(Country $country)
    {
        Log::createInsertLog($this->table, $country->id);
    }

    /**
     * Handle the country "updated" event.
     *
     * @param  \App\Models\Country  $country
     * @return void
     */
    public function updated(Country $country)
    {
        Log::createUpdateLog($this->table, $country->id);
    }

    /**
     * Handle the country "deleted" event.
     *
     * @param  \App\Models\Country  $country
     * @return void
     */
    public function deleted(Country $country)
    {
        Log::createDeleteLog($this->table, $country->id);
    }

    /**
     * Handle the country "restored" event.
     *
     * @param  \App\Models\Country  $country
     * @return void
     */
    public function restored(Country $country)
    {
        //
    }

    /**
     * Handle the country "force deleted" event.
     *
     * @param  \App\Models\Country  $country
     * @return void
     */
    public function forceDeleted(Country $country)
    {
        //
    }
}
