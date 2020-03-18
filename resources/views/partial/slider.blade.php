<section class="section-text-white position-relative">
    <div class="d-background" data-parallax="scroll"></div>
    <div class="d-background bg-theme-blacked"></div>
    <div class="mt-auto container position-relative">
        <div class="top-block-head text-uppercase">
            <h2 class="display-4">Now
                <span class="text-theme">in cinema</span>
            </h2>
        </div>
        <div class="top-block-footer">
            <div class="slick-spaced slick-carousel" data-slick-view="navigation responsive-4">
                <div class="slick-slides">
                    @foreach ($featuredFilms as $featuredFilm)
                        <div class="slick-slide">
                            <article class="poster-entity" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                    <img class="embed-responsive-item" src="{{$featuredFilm->movie->images[0]->path}}" alt="{{$featuredFilm->movie->images[0]->alt}}" />
                                </div>
                                <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                <div class="d-over bg-highlight-bottom">
                                    <h4 class="entity-title">
                                        <a class="content-link" href="{{url("")}}/movie/{{$featuredFilm->movie->id}}">{{$featuredFilm->movie->title}}</a>
                                    </h4>
                                    <div class="entity-category">
                                        @foreach ($featuredFilm->movie->genres as $genre)
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
                                                <span class="info-text">{{$featuredFilm->movie->duration_mins}}</span>
                                                <span class="info-rest">&nbsp;min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="slick-arrows">
                    <div class="slick-arrow-prev">
                        <span class="th-dots th-arrow-left th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div class="slick-arrow-next">
                        <span class="th-dots th-arrow-right th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
