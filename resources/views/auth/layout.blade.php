<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">
    <style>
    .alert-danger {
        color: #eee;
        background-color: rgba(50,05,05,.3);
        border-color: #f5c6cb;
    }
    .alert{
        max-width: 390px;
    }
    </style>
</head>
<body>
    <div class="background"></div>
    {{-- <div class="contain-wrapper"> --}}
        @yield('content')
    {{-- </div> --}}
    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/bootstrap4/js/bootstrap.min.js"></script>
    <!-- Loss -->
    <script src="/js/login.js"></script>
</body>
</html>