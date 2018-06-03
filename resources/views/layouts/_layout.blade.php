<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @include('layouts.styles')
</head>
<body>
@include('layouts._header')


@yield('content')

@include('layouts._footer')
@include('layouts.scripts')
</body>
</html>