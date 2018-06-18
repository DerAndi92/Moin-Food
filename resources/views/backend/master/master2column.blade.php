@extends('backend.master.master')

@section('main_content')
    <div id="content_wrapper">
        <div id="content">
            @yield('content')
        </div>
        <aside id="sidebar">
            @yield('sidebar')
        </aside>
    </div>
@endsection
