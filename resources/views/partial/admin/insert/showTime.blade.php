<div class="col-12">
    <form action="{{url("")}}/admin/insert/ShowTime" method="POST">
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
            <label for="time">Time</label>
            <input type="datetime-local" name="time" id="time" class="form-control">
        </div>
        <div class="form-group">
            <label for="seats">Number of seats:</label>
            <input type="number" name="seats" id="seats" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Insert" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</div>
