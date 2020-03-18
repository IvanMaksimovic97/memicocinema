<div class="col-12">
    <form action="{{url("")}}/admin/insert/FeaturedFilm" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">Movie:</label>
            <select name="id" id="id" class='form-control'>
                @foreach ($movies as $movie)
                    <option value="{{$movie->id}}">
                        {{$movie->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Insert" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</div>
