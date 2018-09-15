<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">

</head>
<body>

@include('partials.navbar')

<div class="container">
    @yield('content')
</div>
{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}
{{--</div>--}}
</body>
</html>
