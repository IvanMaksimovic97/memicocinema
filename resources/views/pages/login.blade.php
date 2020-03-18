@extends('layout.app_noSlider')
@section('title')
    Log In
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{url("")."/login"}}" method="POST">
                    @csrf
                    <div class="form-group"><input type="text" name="username" id="" placeholder="Username" class="form-control"></div>
                    <div class="form-group"><input type="password" name="password" id="" placeholder="Password" class="form-control"></div>
                    <div class="form-group"><input type="submit" value="Log In" class="btn btn-primary"></div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
