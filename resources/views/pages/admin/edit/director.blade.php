@extends('layout.admin')
@section('title')
    Edit Director
@endsection
@section('content')
    <div class="container">
        <h1>Edit Director:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/Director/{{$director->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" value="{{$director->first_name}}">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" value="{{$director->last_name}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
