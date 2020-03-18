<div class="col-12">
    <form action="{{url("")}}/admin/insert/Language" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Language:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Language">
        </div>
        <div class="form-group">
            <input type="submit" value="Insert" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</div>
