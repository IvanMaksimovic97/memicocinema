<div class="col-12">
    <form action="{{url("")}}/admin/insert/Director" method="POST">
        @csrf
        <div class="form-group">
          <label for="firstName">First Name:</label>
          <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="submit" value="Insert" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</div>
