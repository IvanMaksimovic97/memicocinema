<?php

namespace App\Observers;

use App\Models\Language;
use App\Models\Log;

class LanguageObserver
{
    protected $table = 'languages';
    /**
     * Handle the language "created" event.
     *
     * @param  \App\Models\Language  $language
     * @return void
     */
    public function created(Language $language)
    {
        Log::createInsertLog($this->table, $language->id);
    }

    /**
     * Handle the language "updated" event.
     *
     * @param  \App\Models\Language  $language
     * @return void
     */
    public function updated(Language $language)
    {
        Log::createUpdateLog($this->table, $language->id);
    }

    /**
     * Handle the language "deleted" event.
     *
     * @param  \App\Models\Language  $language
     * @return void
     */
    public function deleted(Language $language)
    {
        Log::createDeleteLog($this->table, $language->id);
    }

    /**
     * Handle the language "restored" event.
     *
     * @param  \App\Models\Language  $language
     * @return void
     */
    public function restored(Language $language)
    {
        //
    }

    /**
     * Handle the language "force deleted" event.
     *
     * @param  \App\Models\Language  $language
     * @return void
     */
    public function forceDeleted(Language $language)
    {
        //
    }
}
