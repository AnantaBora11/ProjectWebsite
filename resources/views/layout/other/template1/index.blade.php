<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template 1</title>
    <link rel="stylesheet" href="/css/other/template1/index.css">
    <link rel="stylesheet" href="/css/other/template1/header.css">
    <link rel="stylesheet" href="/css/other/template1/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include('layout/other/template1/header')

    <main>
        @yield('template1')
    </main>

    <script  src="/js/other/template1/login.js"></script>
</body>
</html>