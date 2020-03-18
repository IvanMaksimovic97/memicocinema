{{$movies->links()}}<br>
@foreach ($movies as $movie)
    <article class="movie-line-entity">
        <div class="entity-poster" data-role="hover-wrap">
            <div class="embed-responsive embed-responsive-poster">
                <img class="embed-responsive-item" src="{{$movie->images[0]->path}}" alt="{{$movie->images[0]->alt}}" />
            </div>
        </div>
        <div class="entity-content">
            <h4 class="entity-title">
                <a class="content-link" href="{{url("")}}/movie/{{$movie->id}}">{{$movie->title}}</a>
            </h4>
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
            <p class="text-short entity-text">
                {{$movie->description}}
            </p>
        </div>
    </article>
@endforeach
{{$movies->links()}}
