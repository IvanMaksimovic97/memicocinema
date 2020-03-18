<table class="table">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Created at</th>
        <th>Movie title</th>
        <th>Screening time</th>
        <th>Number of seats</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{$reservation->id}}</th>
                <td>{{$reservation->user->username}}</th>
                <td>{{date_format($reservation->created_at, "d-M-Y H:i")}}</td>
                <td>{{$reservation->show_time->movie->title}}</td>
                <td>{{date_format($reservation->show_time->time, "d-M-Y H:i")}}</td>
                <td>{{$reservation->reserved_seats}}</td>
                <td>
                    <a href="{{url("")}}/reservation/delete/{{$reservation->id}}" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
