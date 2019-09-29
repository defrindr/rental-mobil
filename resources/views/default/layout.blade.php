<!DOCTYPE html>
<html>
    <head>
        <meta name="chatset" name="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}"/>
        <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <div id="website">
            <router-view/>
        </div>
    </body>
    <script src=""></script>
    <script src="/js/app.js"></script>
</html>
