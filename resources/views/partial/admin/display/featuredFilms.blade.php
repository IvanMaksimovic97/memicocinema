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
            @foreach ($featuredFilms as $featuredFilm)
                <tr>
                    <td>{{$featuredFilm->id}}</td>
                    <td>{{$featuredFilm->movie->title}}</td>
                    <td>
                        <a href="{{url("")}}/admin/edit/FeaturedFilm/{{$featuredFilm->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url("")}}/admin/delete/FeaturedFilm/{{$featuredFilm->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
