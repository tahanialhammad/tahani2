@extends('site.site-template')

@section('header')
@include('site.home.partials.hero')
@stop

@section('content')
    {{-- <example-component></example-component> --}}
    @include('site.home.partials.packages')
@stop