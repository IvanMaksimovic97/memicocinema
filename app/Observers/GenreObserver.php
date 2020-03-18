<?php

namespace App\Observers;

use App\Models\Genre;
use App\Models\Log;

class GenreObserver
{
    private $table = 'genres';
    /**
     * Handle the genre "created" event.
     *
     * @param  \App\Models\Genre  $genre
     * @return void
     */
    public function created(Genre $genre)
    {
        Log::createInsertLog($this->table, $genre->id);
    }

    /**
     * Handle the genre "updated" event.
     *
     * @param  \App\Models\Genre  $genre
     * @return void
     */
    public function updated(Genre $genre)
    {
        Log::createUpdateLog($this->table, $genre->id);
    }

    /**
     * Handle the genre "deleted" event.
     *
     * @param  \App\Models\Genre  $genre
     * @return void
     */
    public function deleted(Genre $genre)
    {
        Log::createDeleteLog($this->table, $genre->id);
    }

    /**
     * Handle the genre "restored" event.
     *
     * @param  \App\Models\Genre  $genre
     * @return void
     */
    public function restored(Genre $genre)
    {
        //
    }

    /**
     * Handle the genre "force deleted" event.
     *
     * @param  \App\Models\Genre  $genre
     * @return void
     */
    public function forceDeleted(Genre $genre)
    {
        //
    }
}
