<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find a Job</title>

        @include('layouts/links')

    </head>
    <body>
        @include('layouts/navigation_home')

        <div class="container">
            <div class="vertical-center" style="margin: 0;position: absolute;top: 50%;left: 50%; -ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
                <p>Find a Job</p>
            </div>
        </div>
    
        @include('layouts/scripts')
    </body>
</html>
