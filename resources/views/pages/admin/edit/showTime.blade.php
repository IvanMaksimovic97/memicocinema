@extends('layout.admin')
@section('title')
    Edit Show Time
@endsection
@section('content')
    <div class="container">
        <h1>Edit Show Time:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/ShowTime/{{$showTime->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Movie:</label>
                        <select name="id" id="id" class='form-control'>
                            @foreach ($movies as $movie)
                                <option value="{{$movie->id}}"
                                    @if($showTime->movie_id == $movie->id)
                                    selected
                                    @endif
                                    >
                                    {{$movie->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="datetime-local" name="time" id="time" class="form-control" value="{{$showTime->time}}">
                    </div>
                    <div class="form-group">
                        <label for="seats">Number of seats:</label>
                        <input type="number" name="seats" id="seats" class="form-control" value="{{$showTime->seats}}">
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
