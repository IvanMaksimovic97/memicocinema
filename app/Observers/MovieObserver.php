<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\Movie;

class MovieObserver
{
    protected $table = 'movies';
    /**
     * Handle the movie "created" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function created(Movie $movie)
    {
        Log::createInsertLog($this->table, $movie->id);
    }

    /**
     * Handle the movie "updated" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function updated(Movie $movie)
    {
        Log::createUpdateLog($this->table, $movie->id);
    }

    /**
     * Handle the movie "deleted" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function deleted(Movie $movie)
    {
        Log::createDeleteLog($this->table, $movie->id);
    }

    /**
     * Handle the movie "restored" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function restored(Movie $movie)
    {
        //
    }

    /**
     * Handle the movie "force deleted" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function forceDeleted(Movie $movie)
    {
        //
    }
}
