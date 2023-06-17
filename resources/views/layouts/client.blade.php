<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="{{ asset('jquery-3.6.4.min.js') }}"></script>
    <title>UFOCad</title>
</head>
<body>
    @yield('navbar')
    @yield('courses')
    @yield('name')
    @yield('script')
</body>
</html>
