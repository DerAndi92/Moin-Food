<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Moin-Food Hamburg</title>

        <!-- Fonts & CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type= "text/css" href="css/app.css">

    </head>

    <body>
    <!-- Header -->
        <header>
            <div id="logo">
                <a href="#">
                    <img src="{{asset('images/logo.png')}}" alt ="Logo">
                </a>
            </div>

            <div id="navi">
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Über uns</a></li>
                        <li><a href="#work">Vorschlag</a></li>
                    </ul>
                </nav>
            </div>
        </header>

    <!-- Image-Header -->

    <section id="image"></section>

    <!-- Search -->
    <form>
        <section id="search">
         <h1>Essen. Trinken. Wo du willst.</h1>
         <hr><textarea class="input_text" tabindex="1" placeholder="Gib deinen Standort ein"></textarea><br>
        </section>
    </form>

    <!-- Footer -->
    <footer>
        &copy; 2018 Moin-Food <a href="impressum.blade.php">Impressum</a>
        <a href="datenschutz.blade.php">Datenschutz</a>

    </footer>

    </body>
</html>
