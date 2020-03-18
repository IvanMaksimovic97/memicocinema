<div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Duration (mins)</th>
                <th>Release Date</th>
                <th>Genres</th>
                <th>Directed by</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->duration_mins}}</td>
                    <td>{{date_format($movie->release_date, "d-M-Y")}}</td>
                    <td>
                        @foreach ($movie->genres as $genre)
                            {{$genre->name}}
                            @if (!$loop->last)
                                {{", "}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($movie->directors as $director)
                            {{$director->first_name." ".$director->last_name}}
                            @if (!$loop->last)
                                {{", "}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{url("")}}/admin/edit/Movie/{{$movie->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/Movie/{{$movie->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
