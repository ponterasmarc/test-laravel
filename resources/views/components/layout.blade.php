<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="antialiased">
       <div class="custom-container">
        @session('message')
            <div class="message">{{session('message')}}</div>
        @endsession
       
        {{$slot}}
       </div>
    </body>
</html>
