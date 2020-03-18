<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
    <body class="body">
        @include('partial.header')
        <div style="padding: 15% 0">
            @include('partial.error')
            @include('partial.message')
            @yield('content')
        </div>
        @include('partial.footer')
        @include('partial.jsInclude')
        @yield('additionalJS')
    </body>
</html>
