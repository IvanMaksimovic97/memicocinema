<div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{$genre->id}}</td>
                    <td>{{$genre->name}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/Genre/{{$genre->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/Genre/{{$genre->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
