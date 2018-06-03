@extends('master')

@section('main')

    <section id="image"></section>
    <section id="maincontent">
        @include('search')
        @include('proposals')
    </section>

@endsection