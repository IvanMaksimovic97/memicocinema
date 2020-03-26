<div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Time</th>
                <th>Max seats</th>
                <th>Reserved seats</th>
                <th>Free seats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($showTimes as $showTime)
                <tr>
                    <td>{{$showTime->id}}</td>
                    <td>{{$showTime->movie->title}}</td>
                    <td>{{$showTime->time}}</td>
                    <td>{{$showTime->seats}}</td>
                    <td>{{$showTime->getReservedSeats()}}</td>
                    <td>{{$showTime->getSeats()}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/ShowTime/{{$showTime->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/ShowTime/{{$showTime->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
