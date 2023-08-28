
@extends('admin.admin-template')
@section('content')
faq
@forelse($sections as $section)

{{$section}}
@empty

no faq

@endforelse


@stop
