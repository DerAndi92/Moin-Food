<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Moin-Food Hamburg</title>

        <!-- Fonts & CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600,800" rel="stylesheet">
        <link rel="stylesheet" type= "text/css" href="css/app.css">

    </head>

    <body>
    @include('header')

    <main role="main">
        @yield('main')
    </main>

    @include('footer')
    </body>
</html>
