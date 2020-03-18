<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
    <body>
        @include('partial.admin.header')
        @include('partial.error')
        @include('partial.message')
        @yield('content')
        @include('partial.jsInclude')
        @yield('additionalJS')
    </body>
</html>
