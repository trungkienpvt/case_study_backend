<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Welcome Laravel Case Study
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('assets/css/main.css') !!}
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

{!! Theme::script('assets/js/all.js') !!}


</body>
</html>
