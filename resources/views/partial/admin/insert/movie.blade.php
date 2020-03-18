<div class="col-12">
    <form action="{{url("")}}/admin/insert/Movie" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <label for="releaseDate">Release Date:</label>
            <input type="date" name="releaseDate" id="releaseDate" class="form-control">
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="number" name="duration" id="duration" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="descriptions" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="actors">Actors:</label>
            <div class="d-flex flex-wrap">
                @foreach ($actors as $actor)
                    <div class="input-group mb-2 col-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="actor[]" id="" value="{{$actor->id}}">
                            </div>
                        </div>
                        <label class="input-group-text">
                            {{$actor->first_name." ".$actor->last_name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="directors">Directors:</label>
            <div class="d-flex flex-wrap">
                @foreach ($directors as $director)
                    <div class="input-group mb-2 col-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="director[]" id="" value="{{$director->id}}">
                            </div>
                        </div>
                        <label class="input-group-text">
                            {{$director->first_name." ".$director->last_name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="genres">Genres:</label>
            <div class="d-flex flex-wrap">
                @foreach ($genres as $genre)
                    <div class="input-group mb-2 col-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="genre[]" id="" value="{{$genre->id}}">
                            </div>
                        </div>
                        <label class="input-group-text">
                            {{$genre->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="languages">Languages:</label>
            <div class="d-flex flex-wrap">
                @foreach ($languages as $language)
                    <div class="input-group mb-2 col-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="language[]" id="" value="{{$language->id}}">
                            </div>
                        </div>
                        <label class="input-group-text">
                            {{$language->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="countries">Countries:</label>
            <div class="d-flex flex-wrap">
                @foreach ($countries as $country)
                    <div class="input-group mb-2 col-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="country[]" id="" value="{{$country->id}}">
                            </div>
                        </div>
                        <label class="input-group-text">
                            {{$country->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="images">Images:</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <div class="form-group">
            <input type="submit" value="Insert" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</div>
