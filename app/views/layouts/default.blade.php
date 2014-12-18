<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="container">
            @include('includes.header')
            @include('includes.page_header')
            <div class="row clearfix">
                @yield('content')
                @include('includes.sidebar')
            </div>
            @include('includes.footer')
        </div>
    </body>
</html>
