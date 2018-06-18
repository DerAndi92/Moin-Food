<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@lang('admin.title')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Slabo+27px">
        <link rel="stylesheet" href="{{ URL::asset('css/backend/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/backend/admin.css') }}">

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="page-wrapper">
            <aside id="menu">
                @include('backend.includes.menu')
            </aside>

            <main>
                @section('main')
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (session()->has('message'))
                                        <div id="message">
                                            <div class="alert alert-info">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session('message') }}
                                            </div>
                                        </div>
                                    @endif
                                    @yield('breadcrumbs', Breadcrumbs::render())
                                    @yield('header')
                                </div>
                            </div>
                        </div>
                    </header>
                    @yield('main_content')
                @show
            </main>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/backend/admin.js') }}"></script>
        @yield('assets.js')
    </body>
</html>
