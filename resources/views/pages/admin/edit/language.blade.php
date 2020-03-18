@extends('layout.admin')
@section('title')
    Edit Language
@endsection
@section('content')
    <div class="container">
        <h1>Edit Language:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/Language/{{$language->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Language:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$language->name}}">
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
