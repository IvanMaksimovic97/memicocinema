<div class="section-pannel">
    <div class="grid row">
        <div class="col">
            <form autocomplete="off" id="movieSearch">
                <div class="row form-grid">
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-view-flat input-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-view-flat input-group">
                            <select class="form-control" name="genre" id="genre">
                                <option selected="true" value="0">Genre</option>
                                @foreach ($genres as $genre)
                                    <option value="{{$genre->id}}">
                                        {{$genre->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-view-flat date input-group" data-toggle="datetimepicker" data-target="#release-year-field">
                            <input class="datetimepicker-input form-control" id="release-year" name="releaseYear" type="text" placeholder="Release year" data-target="#release-year-field" data-date-format="Y" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-view-flat input-group">
                            <select class="form-control" name="sortBy" id="sortBy">
                                <option selected="true" value="0">Sort by</option>
                                <option value="titleASC">Title ASC</option>
                                <option value="titleDESC">Title DESC</option>
                                <option value="durASC">Duration ASC</option>
                                <option value="durDESC">Duration DESC</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
