<div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actors as $actor)
                <tr>
                    <td>{{$actor->id}}</td>
                    <td>{{$actor->first_name}}</td>
                    <td>{{$actor->last_name}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/Actor/{{$actor->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/Actor/{{$actor->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
