@extends('layouts.app')
@section('main')


<div class="position-relative w-100">
    <aside class="user-navigation bg-secondary">
        @include('user.partials.nav')
    </aside>

    <section class="user-main bg-light">
        <div id="app">
            @include('user.partials.topbar')
            <div class="user-page-content p-4">
                {{-- @yield('submenu') --}}
                @yield('content')
            </div>
        </div>
    </section>

</div>

@stop
