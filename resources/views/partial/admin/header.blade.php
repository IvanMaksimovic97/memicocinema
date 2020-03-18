<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{url("")}}">Back to Homepage</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @foreach ($adminMenu as $link)
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == substr($link->path,1) ? 'active': ''}}" href="{{url('').$link->path}}">{{$link->name}}</a>
                </li>
            @endforeach
        </ul>
        <form class="my-2 my-lg-0">
            <a href="{{url("")}}/logout" class="btn btn-danger my-2 my-sm-0">Log Out</a>
        </form>
    </div>
</nav>
