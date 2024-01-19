@extends('layouts.app')

@section('main')
<aside class="bg-dark vh-100 text-light" id="nav-bar">
    @include('admin.partials.nav')
</aside>

<section class="page-content" id="body-pd">
    <div id="app">
        @include('admin.partials.topbar')
        <div class="p-4">
            {{-- @yield('submenu') --}}
            @yield('content')
        </div>
    </div>
</section>
@stop