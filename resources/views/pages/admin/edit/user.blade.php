@extends('layout.admin')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="container">
        <h1>Edit User:</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{url("")}}/admin/edit/User/{{$user->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                      </div>
                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                      </div>
                      <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="role">Role:</label>
                          <select name="role" id="role" class="form-control">
                              @foreach ($roles as $role)
                                @if($user->role->id == $role->id)
                                  <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                @else
                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                @endif
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="role">Status:</label>
                        <select name="active" id="role" class="form-control">
                            @if($user->active == 1)
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            @else
                                <option value="1">Active</option>
                                <option value="0" selected>Inactive</option>
                            @endif
                        </select>
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
