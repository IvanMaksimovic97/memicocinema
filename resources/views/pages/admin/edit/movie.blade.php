@extends('layout.admin')
@section('title')
    Edit Movie
@endsection
@section('content')
    <div class="container">
        <h1>Edit Movie:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/Movie/{{$movie->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" value="{{$movie->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="releaseDate">Release Date:</label>
                        <input type="datetime-local" name="releaseDate" id="releaseDate" class="form-control" value="{{$movie->release_date}}">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="number" name="duration" id="duration" class="form-control" value="{{$movie->duration_mins}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="descriptions" cols="30" rows="10" class="form-control">{{$movie->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="actors">Actors:</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($actors as $actor)
                                <div class="input-group mb-2 col-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="actor[]" id="" value="{{$actor->id}}"
                                            @if ($movie->actors->contains($actor->id))
                                                checked
                                            @endif
                                            >
                                        </div>
                                    </div>
                                    <label class="input-group-text">
                                        {{$actor->first_name." ".$actor->last_name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="directors">Directors:</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($directors as $director)
                                <div class="input-group mb-2 col-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="director[]" id="" value="{{$director->id}}"
                                            @if ($movie->directors->contains($director->id))
                                                checked
                                            @endif
                                            >
                                        </div>
                                    </div>
                                    <label class="input-group-text">
                                        {{$director->first_name." ".$director->last_name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="genres">Genres:</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($genres as $genre)
                                <div class="input-group mb-2 col-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="genre[]" id="" value="{{$genre->id}}"
                                            @if ($movie->genres->contains($genre->id))
                                                checked
                                            @endif
                                            >
                                        </div>
                                    </div>
                                    <label class="input-group-text">
                                        {{$genre->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="languages">Languages:</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($languages as $language)
                                <div class="input-group mb-2 col-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="language[]" id="" value="{{$language->id}}"
                                            @if ($movie->languages->contains($language->id))
                                                checked
                                            @endif
                                            >
                                        </div>
                                    </div>
                                    <label class="input-group-text">
                                        {{$language->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="countries">Countries:</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($countries as $country)
                                <div class="input-group mb-2 col-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="country[]" id="" value="{{$country->id}}"
                                            @if ($movie->countries->contains($country->id))
                                                checked
                                            @endif
                                            >
                                        </div>
                                    </div>
                                    <label class="input-group-text">
                                        {{$country->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="images">Images:</label>
                        <input type="file" name="images[]" id="images" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('additionalJS')
    <script src="{{url('/public')}}/js/movieEdit.js"></script>
@endsection
