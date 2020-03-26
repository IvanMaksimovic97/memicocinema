@extends('layout.app_noSlider')
@section('title')
    Reservations
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if ($reservations->count() != 0)
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>User</th>
                            <th>Created at</th>
                            <th>Movie title</th>
                            <th>Screening time</th>
                            <th>Number of seats</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{$reservation->id}}</th>
                                    <td>{{$reservation->user->username}}</th>
                                    <td>{{date_format($reservation->created_at, "d-M-Y H:i")}}</td>
                                    <td>{{$reservation->show_time->movie->title}}</td>
                                    <td>{{date_format($reservation->show_time->time, "d-M-Y H:i")}}</td>
                                    <td>{{$reservation->reserved_seats}}</td>
                                    <td>
                                        <a href="#" data-id="{{$reservation->id}}" class="btn btn-danger btn-sm delete">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-warning" role="alert">
                      <h4 class="alert-heading">No results!</h4>
                      <p>You currently don't have any reservations.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('additionalJS')

@endsection
