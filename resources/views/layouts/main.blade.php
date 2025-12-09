<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Custom styles for sidebar -->
</head>
<body>
    @include('components.navbar')
    @yield('content')
    <x-handap></x-handap>
</body>
</html>
