<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student App</title>
    <link rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.css">
</head>
<body>

@include('include.header')

@yield('content')

@include('include.footer')

<script src="{{ asset('asset') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
