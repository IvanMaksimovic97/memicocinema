@extends('layout.admin')
@section('title')
    Edit Featured Film
@endsection
@section('content')
    <div class="container">
        <h1>Edit Featured Film:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/FeaturedFilm/{{$featuredFilm->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Movie:</label>
                        <select name="id" id="id" class='form-control'>
                            @foreach ($movies as $movie)
                                <option value="{{$movie->id}}"
                                    @if($featuredFilm->movie_id == $movie->id)
                                    selected
                                    @endif
                                    >
                                    {{$movie->title}}
                                </option>
                            @endforeach
                        </select>
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
