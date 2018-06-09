<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Moin-Food Hamburg</title>

        <!-- Fonts & CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600,800" rel="stylesheet">
        <link rel="stylesheet" type= "text/css" href="css/reset.css">
        <link rel="stylesheet" type= "text/css" href="css/basic.css">
        <link rel="stylesheet" type= "text/css" href="css/app.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon-16x16.png">

    </head>

    <body>
    @include('template.header')

    <main role="main">
        @yield('main')

        @include('template.footer')
    </main>


    </body>
</html>
