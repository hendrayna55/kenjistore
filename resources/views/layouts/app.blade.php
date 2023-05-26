<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <title>Kenji Store</title>
</head>
<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    @include('layouts.js')
</body>
</html>