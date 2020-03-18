@extends('layout.app_noSlider')
@section('title')
    Register
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="{{url('').'/register'}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Username:</label>
                  <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="">Confirm password:</label>
                    <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                      <input type="submit" value="Register" class="btn btn-primary">
                      <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

@endsection
