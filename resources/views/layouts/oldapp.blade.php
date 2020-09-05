<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <title>{{config('app.name', 'LSAPP')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-3">
        @include('inc.messages')
        @yield('content')
    </div>
</body>
</html>