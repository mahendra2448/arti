<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('frontend.includes.arti-metastyles')
    </head>
    <body>
        @include('frontend.includes.arti-nav')
        @yield('content')
    
        @include('frontend.includes.arti-footer')
    </body>
    @include('frontend.includes.arti-script')
    @toastr_render
</html>
