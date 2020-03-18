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
            @foreach ($directors as $director)
                <tr>
                    <td>{{$director->id}}</td>
                    <td>{{$director->first_name}}</td>
                    <td>{{$director->last_name}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/Director/{{$director->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/Director/{{$director->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
