<!DOCTYPE html>
<html lang="id-ID">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="mobile-web-app-capable" content="yes">

    <title>@yield('title')</title>

    <!-- <link rel="stylesheet" type="text/css" href="/standard/bootstrap-3.3.6-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="/spectre/dist/spectre.min.css">

    {{-- Additional CSS --}}
    @yield('css')

    {{-- Additional JS --}}
    @yield('js')
</head>
<body>

    @yield('top')

    @if(isset($errors) && count($errors) > 0)
    <div class="container">
        <div class="alert alert-danger" role='alert'>
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
    </div>
    @endif

    @if(isset($messages) && count($messages) > 0)
    <div class="container">
        <div class="alert alert-primary" role='alert'>
            @foreach ($messages as $message)
            {{ $message }} <br/>
            @endforeach
        </div>
    </div>
    @endif

    @yield('body')


    @section('defaultFooter')
    <style type="text/css">
        body {
            padding-bottom: 15em;
        }
    </style>
    @show

</body>
</html>