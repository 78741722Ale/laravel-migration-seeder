<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Laravel Migration Seeder</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Link Foglio stile Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <!-- /#site_header -->
    @include('partials.header')
    <!-- /#site_main -->
    <div id="site_main">
        <!-- Contenuto dinamico -->
        @yield('content')
    </div>

    <!-- /#site_footer -->
    @include('partials.footer')

    <!-- Link a JS (Se serve) -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
