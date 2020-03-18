@extends('layout.app')
@section('title')
    Home Page
@endsection
@section('content')
    <section class="section-long">
        <div class="container">
            @include('partial.movieSearch')
        </div>
        <div class="container" id="content">
            @if (count($movies) > 0)
                @include('partial.movies')
            @endif
        </div>
    </section>
@endsection
@section('additionalJS')
    <script src="{{url('')}}/js/movie.js"></script>
@endsection
