<!DOCTYPE html>
<html lang="en" data-color="light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tokenmart - Largest online marketplace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="images/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- gulp:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- endgulp -->
</head>
<body class="bg-white">
<div class="cursor-direction bg-indigo-100"></div>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="{{ asset('assets/js/build.min.js') }}"></script>
<!-- endgulp -->
</body>
</html>
