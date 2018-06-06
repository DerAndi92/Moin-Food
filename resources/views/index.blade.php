@extends('template.master')

@section('main')

    <section id="hero-image"> </section>
    @include('elements.search')
    @include('elements.suggestions')
    @include('elements.about')

@endsection