<?php

namespace App\Providers;

use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\FeaturedFilm;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Link;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\ShowTime;
use App\Models\Table;
use App\Models\Tables;
use App\Models\User;
use App\Observers\ActorObserver;
use App\Observers\CountryObserver;
use App\Observers\DirectorObserver;
use App\Observers\FeaturedFilmObserver;
use App\Observers\GenreObserver;
use App\Observers\LanguageObserver;
use App\Observers\MovieObserver;
use App\Observers\ReservationObserver;
use App\Observers\ShowTimeObserver;
use App\Observers\UserObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Actor::observe(ActorObserver::class);
        Director::observe(DirectorObserver::class);
        Genre::observe(GenreObserver::class);
        Language::observe(LanguageObserver::class);
        Country::observe(CountryObserver::class);
        User::observe(UserObserver::class);
        Movie::observe(MovieObserver::class);
        FeaturedFilm::observe(FeaturedFilmObserver::class);
        ShowTime::observe(ShowTimeObserver::class);
        Reservation::observe(ReservationObserver::class);

        Paginator::defaultView('vendor.pagination.default');

        $response = array();

        $response['menu'] = Link::all()->where('adminLink','=',0);
        $response['adminMenu'] = Link::all()->where('adminLink','=',1);
        $response['tables'] = Table::all();
        $response['featuredFilms'] = FeaturedFilm::all();

        view()->share($response);
    }
}
