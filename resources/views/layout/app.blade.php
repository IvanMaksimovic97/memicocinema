<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
    <body class="body">
        @include('partial.header')
        @include('partial.slider')
        @include('partial.error')
        @include('partial.message')
        @yield('content')
        @include('partial.footer')
        @include('partial.jsInclude')
        @yield('additionalJS')
    </body>
</html>
