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
            @foreach ($languages as $language)
                <tr>
                    <td>{{$language->id}}</td>
                    <td>{{$language->name}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/Language/{{$language->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/Language/{{$language->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
