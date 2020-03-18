@extends('layout.app')
@section('title')
    {{$movie->title}}
@endsection
@section('additionalStyle')
    <link href="{{url("")}}/css/movie.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="container">
        <div class="sidebar-container">
            <div class="content">
                <section class="section-long">
                    <div class="section-line">
                        <div class="movie-info-entity">
                            <div class="entity-poster" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                    <img class="embed-responsive-item" src="{{$movie->images[0]->path}}" alt="{{$movie->images[0]->alt}}" />
                                </div>
                            </div>
                            <div class="entity-content">
                                <h2 class="entity-title">{{$movie->title}}</h2>
                                <div class="entity-category">
                                    @foreach ($movie->genres as $genre)
                                        {{$genre->name}}
                                        @if (!$loop->last)
                                            {{", "}}
                                        @endif
                                    @endforeach
                                </div>
                                <div class="entity-info">
                                    <div class="info-lines">
                                        <div class="info info-short">
                                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                            <span class="info-text">{{$movie->duration_mins}}</span>
                                            <span class="info-rest">&nbsp;min</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="entity-list">
                                    <li>
                                        <span class="entity-list-title">Release:</span>
                                        {{date_format($movie->release_date, "d-M-Y")}}
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Directed:</span>
                                        @foreach ($movie->directors as $director)
                                            {{$director->first_name." ".$director->last_name}}
                                            @if (!$loop->last)
                                                {{", "}}
                                            @endif
                                        @endforeach
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Starring:</span>
                                        @foreach ($movie->actors as $actor)
                                            {{$actor->first_name." ".$actor->last_name}}
                                            @if (!$loop->last)
                                                {{", "}}
                                            @endif
                                        @endforeach
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Country:</span>
                                        @foreach ($movie->countries as $country)
                                            {{$country->name}}
                                            @if (!$loop->last)
                                                {{", "}}
                                            @endif
                                        @endforeach
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Language:</span>
                                        @foreach ($movie->languages as $language)
                                            {{$language->name}}
                                            @if (!$loop->last)
                                                {{", "}}
                                            @endif
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-line">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Synopsis</h2>
                        </div>
                        <div class="section-description">
                            {{$movie->description}}
                        </div>
                    </div>
                    <div class="section-line">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Photos</h2>
                        </div>
                        <div class="grid row">
                            @foreach ($movie->images as $image)
                            <div class="col-sm-6 col-xl-4">
                                <div class="entity-preview" data-role="hover-wrap">
                                    <div class="embed-responsive d-flex justify-content-center">
                                        <img class="movie-image" src="{{$image->path}}" alt="{{$image->path}}" />
                                    </div>
                                    <div class="d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-view-popup">
                                            <a class="content-link action-icon-bordered rounded-circle" href="{{$image->path}}" data-magnific-popup="image">
                                                <span class="icon-content"><i class="fas fa-search"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
            <div class="sidebar section-long order-lg-last">
                <section class="section-sidebar">
                    <div class="section-head">
                        <h2 class="section-title text-uppercase">Make a reservation</h2>
                    </div>
                    @if (Session::has('user'))
                        @if ($movie->hasAvailableShowTimes())
                            <form action="{{url('')}}/reserve" method="POST" id="reserve">
                                @csrf
                                <div class="form-group">
                                    <label for="showTime">Available show times:</label>
                                    <select name="showTime" id="showTime" class="form-control">
                                        @foreach ($movie->show_times as $showTime)
                                            <option value="{{$showTime->id}}">
                                                {{date_format($showTime->time, "d-M-Y H:i")}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="seats">Number of seats:</label>
                                    <input type="number" name="seats" id="seats" class="form-control" placeholder="
                                    ">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Reserve" class="btn-theme btn" id="submit">
                                </div>
                            </form>
                        @else
                            <div class="alert alert-warning" role="alert">
                                There are currently no available screenings for this movie.
                            </div>
                        @endif
                    @else
                        <div class="alert alert-warning" role="alert">
                            You need to be logged in to make a reservation
                        </div>
                    @endif
                </section>
            </div>
        </div>
    </div>
@endsection
@section('additionalJS')
    <script src="{{url('')}}/js/reservation.js"></script>
@endsection
