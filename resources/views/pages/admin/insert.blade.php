@extends('layout.admin')
@section('title')
   Admin | Insert item
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-3 col-lg-4"></div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="tableSelect">Select table:</label>
                    <select name="tableSelect" id="tableSelect" class="form-control">
                        @foreach ($tables as $table)
                            @if($table->name == "Movies")
                                <option value="{{$table->name}}" selected>{{$table->name}}</option>
                            @elseif($table->name == "Reservations")

                            @else
                                <option value="{{$table->name}}">{{$table->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-4"></div>
        </div>
        <div class="row" id="content"></div>
    </div>
@endsection
@section('additionalJS')
    <script src="{{url('')}}/js/admin.js"></script>
@endsection
