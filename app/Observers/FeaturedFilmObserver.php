<?php

namespace App\Observers;

use App\Models\FeaturedFilm;
use App\Models\Log;

class FeaturedFilmObserver
{
    private $table = 'featured_films';
    /**
     * Handle the featured film "created" event.
     *
     * @param  \App\Models\FeaturedFilm  $featuredFilm
     * @return void
     */
    public function created(FeaturedFilm $featuredFilm)
    {
        Log::createInsertLog($this->table, $featuredFilm->id);
    }

    /**
     * Handle the featured film "updated" event.
     *
     * @param  \App\Models\FeaturedFilm  $featuredFilm
     * @return void
     */
    public function updated(FeaturedFilm $featuredFilm)
    {
        Log::createUpdateLog($this->table, $featuredFilm->id);
    }

    /**
     * Handle the featured film "deleted" event.
     *
     * @param  \App\Models\FeaturedFilm  $featuredFilm
     * @return void
     */
    public function deleted(FeaturedFilm $featuredFilm)
    {
        Log::createDeleteLog($this->table, $featuredFilm->id);
    }

    /**
     * Handle the featured film "restored" event.
     *
     * @param  \App\Models\FeaturedFilm  $featuredFilm
     * @return void
     */
    public function restored(FeaturedFilm $featuredFilm)
    {
        //
    }

    /**
     * Handle the featured film "force deleted" event.
     *
     * @param  \App\Models\FeaturedFilm  $featuredFilm
     * @return void
     */
    public function forceDeleted(FeaturedFilm $featuredFilm)
    {
        //
    }
}
