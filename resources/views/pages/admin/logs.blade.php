@extends('layout.admin')
@section('title')
    Admin | Logs
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <form class="row" id="logFilter">
                    <div class="col form-group">
                        <label for="table">Table: </label>
                        <select name="table" id="table" class="form-control">
                            <option value="0">Select...</option>
                            @foreach ($tables as $table)
                                <option value="{{$table->id}}">{{$table->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="actionType">Action Type: </label>
                        <select name="actionType" id="actionType" class="form-control">
                            <option value="0">Select...</option>
                            @foreach ($actions as $action)
                                <option value="{{$action->id}}">{{$action->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="content">
                @include('partial.admin.display.logsTable')
            </div>
        </div>
    </div>
@endsection
@section('additionalJS')
    <script src="{{url('')}}/js/logs.js"></script>
@endsection
